<?php

namespace Core\Tests;

use Core\Logger\ApiLogger;
use Core\Logger\ConsoleLogger;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\FormParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Request;
use Core\Tests\Mocking\Logger\LogEntry;
use Core\Tests\Mocking\Logger\MockPrinter;
use Core\Tests\Mocking\MockHelper;
use Core\Tests\Mocking\Response\MockResponse;
use Core\Utils\CoreHelper;
use CoreInterfaces\Core\Format;
use CoreInterfaces\Core\Logger\ApiLoggerInterface;
use PHPUnit\Framework\TestCase;
use Psr\Log\InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class LoggerTest extends TestCase
{
    private const REQUEST_FORMAT = 'Request {method} {url} {contentType}';
    private const REQUEST_BODY_FORMAT = 'Request Body {body}';
    private const REQUEST_HEADERS_FORMAT = 'Request Headers {headers}';
    private const RESPONSE_FORMAT = 'Response {statusCode} {contentLength} {contentType}';
    private const RESPONSE_BODY_FORMAT = 'Response Body {body}';
    private const RESPONSE_HEADERS_FORMAT = 'Response Headers {headers}';

    private const TEST_URL = 'https://some/path';
    private const TEST_HEADERS = [
        'Content-Type' => 'my-content-type',
        'HeaderA' => 'value A',
        'HeaderB' => 'value B',
        'Expires' => '2345ms'
    ];
    private const REDACTED_VALUE = '**Redacted**';

    public function testLogLevels()
    {
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::INFO));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::DEBUG));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::NOTICE));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::ERROR));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::EMERGENCY));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::ALERT));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::CRITICAL));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::WARNING));
        MockHelper::getMockLogger()->assertLastEntries($this->logAndGetEntry(LogLevel::INFO));
    }

    public function testConsoleLogger()
    {
        $printer = new MockPrinter();
        $consoleLogger = new ConsoleLogger([$printer, 'printMessage']);

        $this->logAndGetEntry(LogLevel::INFO, $consoleLogger, '{key1}-{key2}', [
            'key1' => 'valA',
            'key2' => 'valB'
        ]);

        $this->assertEquals(["%s: %s\n", LogLevel::INFO, 'valA-valB'], $printer->args);
    }

    public function testConsoleLoggerFailure()
    {
        $level = '__unknown__';
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(
            "Invalid LogLevel: $level. See Psr\Log\LogLevel.php for possible values of log levels."
        );

        $printer = new MockPrinter();
        $consoleLogger = new ConsoleLogger([$printer, 'printMessage']);

        $this->logAndGetEntry($level, $consoleLogger);
    }

    private function logAndGetEntry(
        string $level,
        ?LoggerInterface $logger = null,
        string $message = 'someMessage',
        array $context = []
    ): LogEntry {
        $logEntry = new LogEntry($level, $message, $context);
        MockHelper::getLoggingConfiguration($level, null, null, null, $logger)
            ->logMessage($logEntry->message, $logEntry->context);
        return $logEntry;
    }

    public function testDefaultLoggingConfiguration()
    {
        $apiLogger = MockHelper::getClient()->getApiLogger();
        $this->assertInstanceOf(ApiLoggerInterface::class, $apiLogger);

        $request = new Request(self::TEST_URL);
        $response = MockHelper::getClient()->getHttpClient()->execute($request);
        $apiLogger->logRequest($request);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::REQUEST_FORMAT, [
                'method' => 'Get',
                'url' => self::TEST_URL,
                'contentType' => null
            ])
        );
        $apiLogger->logResponse($response);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::RESPONSE_FORMAT, [
                'statusCode' => 200,
                'contentLength' => null,
                'contentType' => Format::JSON
            ])
        );
    }

    public function testLoggingRequestShouldIncludeInQuery()
    {
        $requestParams = MockHelper::getClient()->validateParameters([
            QueryParam::init('key', 'value')
        ]);
        $request = new Request(self::TEST_URL, MockHelper::getClient(), $requestParams);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration(
            null,
            null,
            MockHelper::getRequestLoggingConfiguration(true)
        ));
        $apiLogger->logRequest($request);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::REQUEST_FORMAT, [
                'method' => 'Get',
                'url' => 'https://some/path?key=value',
                'contentType' => null
            ])
        );
    }

    public function testLoggingRequestContentType()
    {
        $requestParams = MockHelper::getClient()->validateParameters([
            HeaderParam::init('Content-Type', self::TEST_HEADERS['Content-Type'])
        ]);
        $request = new Request(self::TEST_URL, MockHelper::getClient(), $requestParams);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration());
        $apiLogger->logRequest($request);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::REQUEST_FORMAT, [
                'method' => 'Get',
                'url' => self::TEST_URL,
                'contentType' => self::TEST_HEADERS['Content-Type']
            ])
        );
    }

    public function testLoggingRequestFileAsBody()
    {
        $requestParams = MockHelper::getClient()->validateParameters([
            BodyParam::init(MockHelper::getFileWrapper()),
        ]);
        $request = new Request(self::TEST_URL, MockHelper::getClient(), $requestParams);
        $request->setBodyFormat(Format::JSON, [CoreHelper::class, 'serialize']);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration(
            null,
            null,
            MockHelper::getRequestLoggingConfiguration(
                false,
                true
            )
        ));
        $apiLogger->logRequest($request);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::REQUEST_FORMAT, [
                'method' => 'Get',
                'url' => self::TEST_URL,
                'contentType' => 'application/octet-stream'
            ]),
            new LogEntry(LogLevel::INFO, self::REQUEST_BODY_FORMAT, [
                'body' => 'This test file is created to test CoreFileWrapper functionality'
            ])
        );
    }

    public function testLoggingRequestBody()
    {
        $requestParams = MockHelper::getClient()->validateParameters([
            BodyParam::init([
                'key' => 'value'
            ]),
        ]);
        $request = new Request(self::TEST_URL, MockHelper::getClient(), $requestParams);
        $request->setBodyFormat(Format::JSON, [CoreHelper::class, 'serialize']);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration(
            null,
            null,
            MockHelper::getRequestLoggingConfiguration(
                false,
                true
            )
        ));
        $apiLogger->logRequest($request);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::REQUEST_FORMAT, [
                'method' => 'Get',
                'url' => self::TEST_URL,
                'contentType' => Format::JSON
            ]),
            new LogEntry(LogLevel::INFO, self::REQUEST_BODY_FORMAT, [
                'body' => '{"key":"value"}'
            ])
        );
    }

    public function testLoggingRequestFormParams()
    {
        $requestParams = MockHelper::getClient()->validateParameters([
            FormParam::init('key', 'value')
        ]);
        $request = new Request(self::TEST_URL, MockHelper::getClient(), $requestParams);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration(
            null,
            null,
            MockHelper::getRequestLoggingConfiguration(
                false,
                true
            )
        ));
        $apiLogger->logRequest($request);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::REQUEST_FORMAT, [
                'method' => 'Get',
                'url' => self::TEST_URL,
                'contentType' => null
            ]),
            new LogEntry(LogLevel::INFO, self::REQUEST_BODY_FORMAT, [
                'body' => [
                    'key' => 'value'
                ]
            ])
        );
    }

    public function testLoggingRequestHeaders()
    {
        $requestParams = MockHelper::getClient()->validateParameters([
            HeaderParam::init('Content-Type', self::TEST_HEADERS['Content-Type']),
            HeaderParam::init('HeaderA', self::TEST_HEADERS['HeaderA']),
            HeaderParam::init('HeaderB', self::TEST_HEADERS['HeaderB']),
            HeaderParam::init('Expires', self::TEST_HEADERS['Expires'])
        ]);
        $request = new Request(self::TEST_URL, MockHelper::getClient(), $requestParams);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration(
            null,
            null,
            MockHelper::getRequestLoggingConfiguration(
                false,
                false,
                true
            )
        ));
        $apiLogger->logRequest($request);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::REQUEST_FORMAT, [
                'method' => 'Get',
                'url' => self::TEST_URL,
                'contentType' => self::TEST_HEADERS['Content-Type']
            ]),
            new LogEntry(LogLevel::INFO, self::REQUEST_HEADERS_FORMAT, [
                'headers' => [
                    'Content-Type' => self::TEST_HEADERS['Content-Type'],
                    'HeaderA' => self::REDACTED_VALUE,
                    'HeaderB' => self::REDACTED_VALUE,
                    'Expires' => self::TEST_HEADERS['Expires'],
                    'key5' => self::REDACTED_VALUE
                ]
            ])
        );
    }

    public function testLoggingResponseBody()
    {
        $response = new MockResponse();
        $response->setStatusCode(200);
        $response->setBody([
            'key' => 'value'
        ]);
        $response->setHeaders([
            'content-type' => Format::JSON,
            'content-length' => '45'
        ]);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration(
            null,
            null,
            null,
            MockHelper::getResponseLoggingConfiguration(true)
        ));
        $apiLogger->logResponse($response);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry(LogLevel::INFO, self::RESPONSE_FORMAT, [
                'statusCode' => 200,
                'contentLength' => '45',
                'contentType' => Format::JSON
            ]),
            new LogEntry(LogLevel::INFO, self::RESPONSE_BODY_FORMAT, [
                'body' => '{"key":"value"}'
            ])
        );
    }

    public function testLoggingResponseHeaders()
    {
        $response = new MockResponse();
        $response->setStatusCode(400);
        $response->setHeaders(self::TEST_HEADERS);
        $apiLogger = new ApiLogger(MockHelper::getLoggingConfiguration(
            LogLevel::ERROR,
            null,
            null,
            MockHelper::getResponseLoggingConfiguration(
                false,
                true
            )
        ));
        $apiLogger->logResponse($response);
        MockHelper::getMockLogger()->assertLastEntries(
            new LogEntry('error', self::RESPONSE_FORMAT, [
                'statusCode' => 400,
                'contentLength' => null,
                'contentType' => self::TEST_HEADERS['Content-Type']
            ]),
            new LogEntry('error', self::RESPONSE_HEADERS_FORMAT, [
                'headers' => [
                    'Content-Type' => self::TEST_HEADERS['Content-Type'],
                    'HeaderA' => self::REDACTED_VALUE,
                    'HeaderB' => self::REDACTED_VALUE,
                    'Expires' => self::TEST_HEADERS['Expires']
                ]
            ])
        );
    }

    public function testLoggableHeaders()
    {
        $responseConfig = MockHelper::getResponseLoggingConfiguration(false, true);
        $expectedHeaders = [
            'Content-Type' => self::TEST_HEADERS['Content-Type'],
            'HeaderA' => self::REDACTED_VALUE,
            'HeaderB' => self::REDACTED_VALUE,
            'Expires' => self::TEST_HEADERS['Expires']
        ];
        $this->assertEquals($expectedHeaders, $responseConfig->getLoggableHeaders(self::TEST_HEADERS, true));
    }

    public function testAllUnMaskedLoggableHeaders()
    {
        $responseConfig = MockHelper::getResponseLoggingConfiguration(false, true);
        $this->assertEquals(self::TEST_HEADERS, $responseConfig->getLoggableHeaders(self::TEST_HEADERS, false));
    }

    public function testIncludedLoggableHeaders()
    {
        $responseConfig = MockHelper::getResponseLoggingConfiguration(
            false,
            true,
            ['HeaderB', 'Expires']
        );
        $expectedHeaders = [
            'HeaderB' => self::REDACTED_VALUE,
            'Expires' => self::TEST_HEADERS['Expires']
        ];
        $this->assertEquals($expectedHeaders, $responseConfig->getLoggableHeaders(self::TEST_HEADERS, true));
    }

    public function testExcludedLoggableHeaders()
    {
        $responseConfig = MockHelper::getResponseLoggingConfiguration(
            false,
            true,
            [],
            ['HeaderB', 'Expires']
        );
        $expectedHeaders = [
            'HeaderA' => self::REDACTED_VALUE,
            'Content-Type' => self::TEST_HEADERS['Content-Type'],
        ];
        $this->assertEquals($expectedHeaders, $responseConfig->getLoggableHeaders(self::TEST_HEADERS, true));
    }

    public function testIncludeAndExcludeLoggableHeaders()
    {
        $responseConfig = MockHelper::getResponseLoggingConfiguration(
            false,
            true,
            ['HEADERB', 'EXPIRES'],
            ['EXPIRES']
        );
        $expectedHeaders = [
            'HeaderB' => self::REDACTED_VALUE,
            'Expires' => self::TEST_HEADERS['Expires']
        ];
        // If both include and exclude headers are provided then only includeHeaders will work
        $this->assertEquals($expectedHeaders, $responseConfig->getLoggableHeaders(self::TEST_HEADERS, true));
    }

    public function testUnMaskedLoggableHeaders()
    {
        $responseConfig = MockHelper::getResponseLoggingConfiguration(
            false,
            true,
            [],
            [],
            ['HeaderB']
        );
        $expectedHeaders = [
            'Content-Type' => self::TEST_HEADERS['Content-Type'],
            'HeaderA' => self::REDACTED_VALUE,
            'HeaderB' => self::TEST_HEADERS['HeaderB'],
            'Expires' => self::TEST_HEADERS['Expires']
        ];
        $this->assertEquals($expectedHeaders, $responseConfig->getLoggableHeaders(self::TEST_HEADERS, true));
    }
}

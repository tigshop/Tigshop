[![Nette PHP Generator](https://github.com/nette/php-generator/assets/194960/8a2c83bd-daea-475f-994c-9c951de88501)](https://doc.nette.org/en/php-generator)

[![Latest Stable Version](https://poser.pugx.org/nette/php-generator/v/stable)](https://github.com/nette/php-generator/releases) [![Downloads this Month](https://img.shields.io/packagist/dm/nette/php-generator.svg)](https://packagist.org/packages/nette/php-generator)

 <!---->

Are you looking for a tool to generate PHP code for [classes](#classes), [functions](#global-functions), or complete [PHP files](#php-files)?

<h3>

✅ Supports all the latest PHP features like [property hooks](#property-hooks), [enums](#enums), [attributes](#attributes), etc.<br>
✅ Allows you to easily modify [existing classes](#generating-from-existing-ones)<br>
✅ Output compliant with [PSR-12 / PER coding style](#printer-and-psr-compliance)<br>
✅ Highly mature, stable, and widely used library

</h3>

 <!---->

Installation
------------

Download and install the library using the [Composer](https://doc.nette.org/en/best-practices/composer) tool:

```shell
composer require nette/php-generator
```

PhpGenerator 4.1 is compatible with PHP 8.0 to 8.4. Documentation can be found on the [library's website](https://doc.nette.org/php-generator).

 <!---->

[Support Me](https://github.com/sponsors/dg)
--------------------------------------------

Do you like PHP Generator? Are you looking forward to the new features?

[![Buy me a coffee](https://files.nette.org/icons/donation-3.svg)](https://github.com/sponsors/dg)

Thank you!

 <!---->

Classes
-------

Let's start with an example of creating a class using [ClassType](https://api.nette.org/php-generator/master/Nette/PhpGenerator/ClassType.html):

```php
$class = new Nette\PhpGenerator\ClassType('Demo');

$class
	->setFinal()
	->setExtends(ParentClass::class)
	->addImplement(Countable::class)
	->addComment("Class description.\nSecond line\n")
	->addComment('@property-read Nette\Forms\Form $form');

// generate code simply by typecasting to string or using echo:
echo $class;
```

This will return:

```php
/**
 * Class description
 * Second line
 *
 * @property-read Nette\Forms\Form $form
 */
final class Demo extends ParentClass implements Countable
{
}
```

To generate the code, you can also use a so-called printer, which, unlike `echo $class`, can be [further configured](#printer-and-psr-compliance):

```php
$printer = new Nette\PhpGenerator\Printer;
echo $printer->printClass($class);
```

You can add constants (class [Constant](https://api.nette.org/php-generator/master/Nette/PhpGenerator/Constant.html)) and properties (class [Property](https://api.nette.org/php-generator/master/Nette/PhpGenerator/Property.html)):

```php
$class->addConstant('ID', 123)
	->setProtected() // constant visibility
	->setType('int')
	->setFinal();

$class->addProperty('items', [1, 2, 3])
	->setPrivate() // or setVisibility('private')
	->setStatic()
	->addComment('@var int[]');

$class->addProperty('list')
	->setType('?array')
	->setInitialized(); // outputs '= null'
```

This will generate:

```php
final protected const int ID = 123;

/** @var int[] */
private static $items = [1, 2, 3];

public ?array $list = null;
```

And you can add [methods](#method-and-function-signatures):

```php
$method = $class->addMethod('count')
	->addComment('Count it.')
	->setFinal()
	->setProtected()
	->setReturnType('?int') // return types for methods
	->setBody('return count($items ?: $this->items);');

$method->addParameter('items', []) // $items = []
	->setReference()           // &$items = []
	->setType('array');        // array &$items = []
```

The result is:

```php
/**
 * Count it.
 */
final protected function count(array &$items = []): ?int
{
	return count($items ?: $this->items);
}
```

Promoted parameters introduced in PHP 8.0 can be passed to the constructor:

```php
$method = $class->addMethod('__construct');
$method->addPromotedParameter('name');
$method->addPromotedParameter('args', [])
	->setPrivate();
```

The result is:

```php
public function __construct(
	public $name,
	private $args = [],
) {
}
```

Readonly properties and classes be marked using the `setReadOnly()` function.

------

If an added property, constant, method, or parameter already exists, an exception is thrown.

Class members can be removed using `removeProperty()`, `removeConstant()`, `removeMethod()`, or `removeParameter()`.

You can also add existing `Method`, `Property`, or `Constant` objects to the class:

```php
$method = new Nette\PhpGenerator\Method('getHandle');
$property = new Nette\PhpGenerator\Property('handle');
$const = new Nette\PhpGenerator\Constant('ROLE');

$class = (new Nette\PhpGenerator\ClassType('Demo'))
	->addMember($method)
	->addMember($property)
	->addMember($const);
```

You can also clone existing methods, properties, and constants under a different name using `cloneWithName()`:

```php
$methodCount = $class->getMethod('count');
$methodRecount = $methodCount->cloneWithName('recount');
$class->addMember($methodRecount);
```

 <!---->

Interfaces or Traits
--------------------

You can create interfaces and traits (classes [InterfaceType](https://api.nette.org/php-generator/master/Nette/PhpGenerator/InterfaceType.html) and [TraitType](https://api.nette.org/php-generator/master/Nette/PhpGenerator/TraitType.html)):

```php
$interface = new Nette\PhpGenerator\InterfaceType('MyInterface');
$trait = new Nette\PhpGenerator\TraitType('MyTrait');
```

Using a trait:

```php
$class = new Nette\PhpGenerator\ClassType('Demo');
$class->addTrait('SmartObject');
$class->addTrait('MyTrait')
	->addResolution('sayHello as protected')
	->addComment('@use MyTrait<Foo>');
echo $class;
```

The result is:

```php
class Demo
{
	use SmartObject;
	/** @use MyTrait<Foo> */
	use MyTrait {
		sayHello as protected;
	}
}
```

 <!---->

Enums
-----

You can easily create enums introduced in PHP 8.1 like this (class [EnumType](https://api.nette.org/php-generator/master/Nette/PhpGenerator/EnumType.html)):

```php
$enum = new Nette\PhpGenerator\EnumType('Suit');
$enum->addCase('Clubs');
$enum->addCase('Diamonds');
$enum->addCase('Hearts');
$enum->addCase('Spades');

echo $enum;
```

The result is:

```php
enum Suit
{
	case Clubs;
	case Diamonds;
	case Hearts;
	case Spades;
}
```

You can also define scalar equivalents and create a "backed" enum:

```php
$enum->addCase('Clubs', '♣');
$enum->addCase('Diamonds', '♦');
```

For each *case*, you can add a comment or [attributes](#attributes) using `addComment()` or `addAttribute()`.

 <!---->

Anonymous Classes
-----------------

Pass `null` as the name, and you have an anonymous class:

```php
$class = new Nette\PhpGenerator\ClassType(null);
$class->addMethod('__construct')
	->addParameter('foo');

echo '$obj = new class ($val) ' . $class . ';';
```

The result is:

```php
$obj = new class ($val) {

	public function __construct($foo)
	{
	}
};
```

 <!---->

Global Functions
----------------

The code for functions is generated by the class [GlobalFunction](https://api.nette.org/php-generator/master/Nette/PhpGenerator/GlobalFunction.html):

```php
$function = new Nette\PhpGenerator\GlobalFunction('foo');
$function->setBody('return $a + $b;');
$function->addParameter('a');
$function->addParameter('b');
echo $function;

// or use the PsrPrinter for output compliant with PSR-2 / PSR-12 / PER
// echo (new Nette\PhpGenerator\PsrPrinter)->printFunction($function);
```

The result is:

```php
function foo($a, $b)
{
	return $a + $b;
}
```

 <!---->

Anonymous Functions
-------------------

The code for anonymous functions is generated by the class [Closure](https://api.nette.org/php-generator/master/Nette/PhpGenerator/Closure.html):

```php
$closure = new Nette\PhpGenerator\Closure;
$closure->setBody('return $a + $b;');
$closure->addParameter('a');
$closure->addParameter('b');
$closure->addUse('c')
	->setReference();
echo $closure;

// or use the PsrPrinter for output compliant with PSR-2 / PSR-12 / PER
// echo (new Nette\PhpGenerator\PsrPrinter)->printClosure($closure);
```

The result is:

```php
function ($a, $b) use (&$c) {
	return $a + $b;
}
```

 <!---->

Short Arrow Functions
---------------------

You can also output a short anonymous function using the printer:

```php
$closure = new Nette\PhpGenerator\Closure;
$closure->setBody('$a + $b');
$closure->addParameter('a');
$closure->addParameter('b');

echo (new Nette\PhpGenerator\Printer)->printArrowFunction($closure);
```

The result is:

```php
fn($a, $b) => $a + $b
```

 <!---->

Method and Function Signatures
------------------------------

Methods are represented by the class [Method](https://api.nette.org/php-generator/master/Nette/PhpGenerator/Method.html). You can set visibility, return value, add comments, [attributes](#attributes), etc.:

```php
$method = $class->addMethod('count')
	->addComment('Count it.')
	->setFinal()
	->setProtected()
	->setReturnType('?int');
```

Individual parameters are represented by the class [Parameter](https://api.nette.org/php-generator/master/Nette/PhpGenerator/Parameter.html). Again, you can set all conceivable properties:

```php
$method->addParameter('items', []) // $items = []
	->setReference()           // &$items = []
	->setType('array');        // array &$items = []

// function count(&$items = [])
```

To define the so-called variadics parameters (or also the splat, spread, ellipsis, unpacking or three dots operator), use `setVariadic()`:

```php
$method = $class->addMethod('count');
$method->setVariadic(true);
$method->addParameter('items');
```

This generates:

```php
function count(...$items)
{
}
```

 <!---->

Method and Function Bodies
--------------------------

The body can be passed all at once to the `setBody()` method or gradually (line by line) by repeatedly calling `addBody()`:

```php
$function = new Nette\PhpGenerator\GlobalFunction('foo');
$function->addBody('$a = rand(10, 20);');
$function->addBody('return $a;');
echo $function;
```

The result is:

```php
function foo()
{
	$a = rand(10, 20);
	return $a;
}
```

You can use special placeholders for easy variable insertion.

Simple placeholders `?`

```php
$str = 'any string';
$num = 3;
$function = new Nette\PhpGenerator\GlobalFunction('foo');
$function->addBody('return substr(?, ?);', [$str, $num]);
echo $function;
```

The result is:

```php
function foo()
{
	return substr('any string', 3);
}
```

Placeholder for variadic `...?`

```php
$items = [1, 2, 3];
$function = new Nette\PhpGenerator\GlobalFunction('foo');
$function->setBody('myfunc(...?);', [$items]);
echo $function;
```

The result is:

```php
function foo()
{
	myfunc(1, 2, 3);
}
```

You can also use named parameters for PHP 8 with `...?:`

```php
$items = ['foo' => 1, 'bar' => true];
$function->setBody('myfunc(...?:);', [$items]);

// myfunc(foo: 1, bar: true);
```

The placeholder is escaped with a backslash `\?`

```php
$num = 3;
$function = new Nette\PhpGenerator\GlobalFunction('foo');
$function->addParameter('a');
$function->addBody('return $a \? 10 : ?;', [$num]);
echo $function;
```

The result is:

```php
function foo($a)
{
	return $a ? 10 : 3;
}
```

 <!---->

Printer and PSR Compliance
--------------------------

The [Printer](https://api.nette.org/php-generator/master/Nette/PhpGenerator/Printer.html) class is used for generating PHP code:

```php
$class = new Nette\PhpGenerator\ClassType('Demo');
// ...

$printer = new Nette\PhpGenerator\Printer;
echo $printer->printClass($class); // same as: echo $class
```

It can generate code for all other elements, offering methods like `printFunction()`, `printNamespace()`, etc.

There's also the `PsrPrinter` class, which outputs in accordance with PSR-2 / PSR-12 / PER coding style:

```php
$printer = new Nette\PhpGenerator\PsrPrinter;
echo $printer->printClass($class);
```

Need custom behavior? Create your own version by inheriting the `Printer` class. You can reconfigure these variables:

```php
class MyPrinter extends Nette\PhpGenerator\Printer
{
	// length of the line after which the line will break
	public int $wrapLength = 120;
	// indentation character, can be replaced with a sequence of spaces
	public string $indentation = "\t";
	// number of blank lines between properties
	public int $linesBetweenProperties = 0;
	// number of blank lines between methods
	public int $linesBetweenMethods = 2;
	// number of blank lines between 'use statements' groups for classes, functions, and constants
	public int $linesBetweenUseTypes = 0;
	// position of the opening curly brace for functions and methods
	public bool $bracesOnNextLine = true;
	// place one parameter on one line, even if it has an attribute or is supported
	public bool $singleParameterOnOneLine = false;
	// omits namespaces that do not contain any class or function
	public bool $omitEmptyNamespaces = true;
	// separator between the right parenthesis and return type of functions and methods
	public string $returnTypeColon = ': ';
}
```

How and why does the standard `Printer` differ from `PsrPrinter`? Why isn't there just one printer, the `PsrPrinter`, in the package?

The standard `Printer` formats the code as we do throughout Nette. Since Nette was established much earlier than PSR, and also because PSR took years to deliver standards on time, sometimes even several years after introducing a new feature in PHP, it resulted in a [coding standard](https://doc.nette.org/en/contributing/coding-standard) that differs in a few minor aspects.
The major difference is the use of tabs instead of spaces. We know that by using tabs in our projects, we allow for width customization, which is [essential for people with visual impairments](https://doc.nette.org/en/contributing/coding-standard#toc-tabs-instead-of-spaces).
An example of a minor difference is placing the curly brace on a separate line for functions and methods, always. The PSR recommendation seems illogical to us and [leads to reduced code clarity](https://doc.nette.org/en/contributing/coding-standard#toc-wrapping-and-braces).

 <!---->

Types
-----

Every type or union/intersection type can be passed as a string; you can also use predefined constants for native types:

```php
use Nette\PhpGenerator\Type;

$member->setType('array'); // or Type::Array;
$member->setType('?array'); // or Type::nullable(Type::Array);
$member->setType('array|string'); // or Type::union(Type::Array, Type::String)
$member->setType('Foo&Bar'); // or Type::intersection(Foo::class, Bar::class)
$member->setType(null); // removes the type
```

The same applies to the `setReturnType()` method.

 <!---->

Literals
--------

Using `Literal`, you can pass any PHP code, for example, for default property values or parameters, etc:

```php
use Nette\PhpGenerator\Literal;

$class = new Nette\PhpGenerator\ClassType('Demo');

$class->addProperty('foo', new Literal('Iterator::SELF_FIRST'));

$class->addMethod('bar')
	->addParameter('id', new Literal('1 + 2'));

echo $class;
```

Result:

```php
class Demo
{
	public $foo = Iterator::SELF_FIRST;

	public function bar($id = 1 + 2)
	{
	}
}
```

You can also pass parameters to `Literal` and have them formatted into valid PHP code using [placeholders](#method-and-function-bodies):

```php
new Literal('substr(?, ?)', [$a, $b]);
// generates for example: substr('hello', 5);
```

A literal representing the creation of a new object can easily be generated using the `new` method:

```php
Literal::new(Demo::class, [$a, 'foo' => $b]);
// generates for example: new Demo(10, foo: 20)
```

 <!---->

Attributes
----------

With PHP 8, you can add attributes to all classes, methods, properties, constants, enum cases, functions, closures, and parameters. You can also use [literals](#literals) as parameter values.

```php
$class = new Nette\PhpGenerator\ClassType('Demo');
$class->addAttribute('Table', [
	'name' => 'user',
	'constraints' => [
		Literal::new('UniqueConstraint', ['name' => 'ean', 'columns' => ['ean']]),
	],
]);

$class->addProperty('list')
	->addAttribute('Deprecated');

$method = $class->addMethod('count')
	->addAttribute('Foo\Cached', ['mode' => true]);

$method->addParameter('items')
	->addAttribute('Bar');

echo $class;
```

Result:

```php
#[Table(name: 'user', constraints: [new UniqueConstraint(name: 'ean', columns: ['ean'])])]
class Demo
{
	#[Deprecated]
	public $list;


	#[Foo\Cached(mode: true)]
	public function count(
		#[Bar]
		$items,
	) {
	}
}
```

 <!---->

Property Hooks
--------------

You can also define property hooks (represented by the class [PropertyHook](https://api.nette.org/php-generator/master/Nette/PhpGenerator/PropertyHook.html)) for get and set operations, a feature introduced in PHP 8.4:

```php
$class = new Nette\PhpGenerator\ClassType('Demo');
$prop = $class->addProperty('firstName')
    ->setType('string');

$prop->addHook('set', 'strtolower($value)')
    ->addParameter('value')
	    ->setType('string');

$prop->addHook('get')
	->setBody('return ucfirst($this->firstName);');

echo $class;
```

This generates:

```php
class Demo
{
    public string $firstName {
        set(string $value) => strtolower($value);
        get {
            return ucfirst($this->firstName);
        }
    }
}
```

Properties and property hooks can be abstract or final:

```php
$class->addProperty('id')
    ->setType('int')
    ->addHook('get')
        ->setAbstract();

$class->addProperty('role')
    ->setType('string')
    ->addHook('set', 'strtolower($value)')
        ->setFinal();
```

 <!---->

Asymmetric Visibility
---------------------

PHP 8.4 introduces asymmetric visibility for properties. You can set different access levels for reading and writing.
The visibility can be set using either the `setVisibility()` method with two parameters, or by using `setPublic()`, `setProtected()`, or `setPrivate()` with the `mode` parameter that specifies whether the visibility applies to getting or setting the property. The default mode is 'get'.

```php
$class = new Nette\PhpGenerator\ClassType('Demo');

$class->addProperty('name')
    ->setType('string')
    ->setVisibility('public', 'private'); // public for read, private for write

$class->addProperty('id')
    ->setType('int')
    ->setProtected('set'); // protected for write

echo $class;
```

This generates:

```php
class Demo
{
    public private(set) string $name;

    protected(set) int $id;
}
```

 <!---->

Namespace
---------

Classes, traits, interfaces, and enums (hereafter referred to as classes) can be grouped into namespaces represented by the [PhpNamespace](https://api.nette.org/php-generator/master/Nette/PhpGenerator/PhpNamespace.html) class:

```php
$namespace = new Nette\PhpGenerator\PhpNamespace('Foo');

// create new classes in the namespace
$class = $namespace->addClass('Task');
$interface = $namespace->addInterface('Countable');
$trait = $namespace->addTrait('NameAware');

// or insert an existing class into the namespace
$class = new Nette\PhpGenerator\ClassType('Task');
$namespace->add($class);
```

If the class already exists, an exception is thrown.

You can define use clauses:

```php
// use Http\Request;
$namespace->addUse(Http\Request::class);
// use Http\Request as HttpReq;
$namespace->addUse(Http\Request::class, 'HttpReq');
// use function iter\range;
$namespace->addUseFunction('iter\range');
```

To simplify a fully qualified class, function, or constant name based on defined aliases, use the `simplifyName` method:

```php
echo $namespace->simplifyName('Foo\Bar'); // 'Bar', because 'Foo' is the current namespace
echo $namespace->simplifyName('iter\range', $namespace::NameFunction); // 'range', due to the defined use-statement
```

Conversely, you can convert a simplified class, function, or constant name back to a fully qualified name using the `resolveName` method:

```php
echo $namespace->resolveName('Bar'); // 'Foo\Bar'
echo $namespace->resolveName('range', $namespace::NameFunction); // 'iter\range'
```

 <!---->

Class Names Resolving
---------------------

**When a class is part of a namespace, it's rendered slightly differently:** all types (e.g., type hints, return types, parent class name, implemented interfaces, used traits, and attributes) are automatically *resolved* (unless you turn it off, see below).
This means you must use **fully qualified class names** in definitions, and they will be replaced with aliases (based on use clauses) or fully qualified names in the resulting code:

```php
$namespace = new Nette\PhpGenerator\PhpNamespace('Foo');
$namespace->addUse('Bar\AliasedClass');

$class = $namespace->addClass('Demo');
$class->addImplement('Foo\A') // will be simplified to A
	->addTrait('Bar\AliasedClass'); // will be simplified to AliasedClass

$method = $class->addMethod('method');
$method->addComment('@return ' . $namespace->simplifyType('Foo\D')); // we manually simplify in comments
$method->addParameter('arg')
	->setType('Bar\OtherClass'); // will be translated to \Bar\OtherClass

echo $namespace;

// or use the PsrPrinter for output in accordance with PSR-2 / PSR-12 / PER
// echo (new Nette\PhpGenerator\PsrPrinter)->printNamespace($namespace);
```

Result:

```php
namespace Foo;

use Bar\AliasedClass;

class Demo implements A
{
	use AliasedClass;

	/**
	 * @return D
	 */
	public function method(\Bar\OtherClass $arg)
	{
	}
}
```

Auto-resolving can be turned off this way:

```php
$printer = new Nette\PhpGenerator\Printer; // or PsrPrinter
$printer->setTypeResolving(false);
echo $printer->printNamespace($namespace);
```

 <!---->

PHP Files
---------

Classes, functions, and namespaces can be grouped into PHP files represented by the [PhpFile](https://api.nette.org/php-generator/master/Nette/PhpGenerator/PhpFile.html) class:

```php
$file = new Nette\PhpGenerator\PhpFile;
$file->addComment('This file is auto-generated.');
$file->setStrictTypes(); // adds declare(strict_types=1)

$class = $file->addClass('Foo\A');
$function = $file->addFunction('Foo\foo');

// or
// $namespace = $file->addNamespace('Foo');
// $class = $namespace->addClass('A');
// $function = $namespace->addFunction('foo');

echo $file;

// or use the PsrPrinter for output in accordance with PSR-2 / PSR-12 / PER
// echo (new Nette\PhpGenerator\PsrPrinter)->printFile($file);
```

Result:

```php
<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Foo;

class A
{
}

function foo()
{
}
```

**Please note:** No additional code can be added to the files outside of functions and classes.

 <!---->

Generating from Existing Ones
-----------------------------

In addition to being able to model classes and functions using the API described above, you can also have them automatically generated using existing ones:

```php
// creates a class identical to the PDO class
$class = Nette\PhpGenerator\ClassType::from(PDO::class);

// creates a function identical to the trim() function
$function = Nette\PhpGenerator\GlobalFunction::from('trim');

// creates a closure based on the provided one
$closure = Nette\PhpGenerator\Closure::from(
	function (stdClass $a, $b = null) {},
);
```

By default, function and method bodies are empty. If you also want to load them, use this method
(requires the `nikic/php-parser` package to be installed):

```php
$class = Nette\PhpGenerator\ClassType::from(Foo::class, withBodies: true);

$function = Nette\PhpGenerator\GlobalFunction::from('foo', withBody: true);
```

 <!---->

Loading from PHP Files
----------------------

You can also load functions, classes, interfaces, and enums directly from a string containing PHP code. For example, to create a `ClassType` object:

```php
$class = Nette\PhpGenerator\ClassType::fromCode(<<<XX
	<?php

	class Demo
	{
		public $foo;
	}
	XX);
```

When loading classes from PHP code, single-line comments outside method bodies are ignored (e.g., for properties, etc.), as this library doesn't have an API to work with them.

You can also directly load an entire PHP file, which can contain any number of classes, functions, or even namespaces:

```php
$file = Nette\PhpGenerator\PhpFile::fromCode(file_get_contents('classes.php'));
```

The file's initial comment and `strict_types` declaration are also loaded. However, all other global code is ignored.

It requires `nikic/php-parser` to be installed.

*(If you need to manipulate global code in files or individual statements in method bodies, it's better to use the `nikic/php-parser` library directly.)*

 <!---->

Class Manipulator
-----------------

The [ClassManipulator](https://api.nette.org/php-generator/master/Nette/PhpGenerator/ClassManipulator.html) class provides tools for manipulating classes.

```php
$class = new Nette\PhpGenerator\ClassType('Demo');
$manipulator = new Nette\PhpGenerator\ClassManipulator($class);
```

The `inheritMethod()` method copies a method from a parent class or implemented interface into your class. This allows you to override the method or extend its signature:

```php
$method = $manipulator->inheritMethod('bar');
$method->setBody('...');
```

The `inheritProperty()` method copies a property from a parent class into your class. This is useful when you want to have the same property in your class, but possibly with a different default value:

```php
$property = $manipulator->inheritProperty('foo');
$property->setValue('new value');
```

The `implement()` method automatically implements all methods and properties from the given interface or abstract class:

```php
$manipulator->implement(SomeInterface::class);
// Now your class implements SomeInterface and includes all its methods
```

 <!---->

Variable Dumping
----------------

The `Dumper` class converts a variable into parseable PHP code. It provides a better and clearer output than the standard `var_export()` function.

```php
$dumper = new Nette\PhpGenerator\Dumper;

$var = ['a', 'b', 123];

echo $dumper->dump($var); // outputs ['a', 'b', 123]
```

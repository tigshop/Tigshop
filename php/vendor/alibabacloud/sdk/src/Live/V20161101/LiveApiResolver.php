<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCasterComponent addCasterComponent(array $options = [])
 * @method AddCasterEpisode addCasterEpisode(array $options = [])
 * @method AddCasterEpisodeGroup addCasterEpisodeGroup(array $options = [])
 * @method AddCasterEpisodeGroupContent addCasterEpisodeGroupContent(array $options = [])
 * @method AddCasterLayout addCasterLayout(array $options = [])
 * @method AddCasterProgram addCasterProgram(array $options = [])
 * @method AddCasterVideoResource addCasterVideoResource(array $options = [])
 * @method AddCustomLiveStreamTranscode addCustomLiveStreamTranscode(array $options = [])
 * @method AddLiveAIProduceRules addLiveAIProduceRules(array $options = [])
 * @method AddLiveAISubtitle addLiveAISubtitle(array $options = [])
 * @method AddLiveAppRecordConfig addLiveAppRecordConfig(array $options = [])
 * @method AddLiveAppSnapshotConfig addLiveAppSnapshotConfig(array $options = [])
 * @method AddLiveAudioAuditConfig addLiveAudioAuditConfig(array $options = [])
 * @method AddLiveAudioAuditNotifyConfig addLiveAudioAuditNotifyConfig(array $options = [])
 * @method AddLiveCenterTransfer addLiveCenterTransfer(array $options = [])
 * @method AddLiveDetectNotifyConfig addLiveDetectNotifyConfig(array $options = [])
 * @method AddLiveDomain addLiveDomain(array $options = [])
 * @method AddLiveDomainMapping addLiveDomainMapping(array $options = [])
 * @method AddLiveDomainPlayMapping addLiveDomainPlayMapping(array $options = [])
 * @method AddLiveMessageGroupBand addLiveMessageGroupBand(array $options = [])
 * @method AddLivePackageConfig addLivePackageConfig(array $options = [])
 * @method AddLivePullStreamInfoConfig addLivePullStreamInfoConfig(array $options = [])
 * @method AddLiveRecordNotifyConfig addLiveRecordNotifyConfig(array $options = [])
 * @method AddLiveRecordVodConfig addLiveRecordVodConfig(array $options = [])
 * @method AddLiveSnapshotDetectPornConfig addLiveSnapshotDetectPornConfig(array $options = [])
 * @method AddLiveSnapshotNotifyConfig addLiveSnapshotNotifyConfig(array $options = [])
 * @method AddLiveStreamMerge addLiveStreamMerge(array $options = [])
 * @method AddLiveStreamTranscode addLiveStreamTranscode(array $options = [])
 * @method AddLiveStreamWatermark addLiveStreamWatermark(array $options = [])
 * @method AddLiveStreamWatermarkRule addLiveStreamWatermarkRule(array $options = [])
 * @method AddPlaylistItems addPlaylistItems(array $options = [])
 * @method AddRtsLiveStreamTranscode addRtsLiveStreamTranscode(array $options = [])
 * @method AddShowIntoShowList addShowIntoShowList(array $options = [])
 * @method AddStudioLayout addStudioLayout(array $options = [])
 * @method AddTrancodeSEI addTrancodeSEI(array $options = [])
 * @method BanLiveMessageGroup banLiveMessageGroup(array $options = [])
 * @method BatchDeleteLiveDomainConfigs batchDeleteLiveDomainConfigs(array $options = [])
 * @method BatchGetOnlineUsers batchGetOnlineUsers(array $options = [])
 * @method BatchSetLiveDomainConfigs batchSetLiveDomainConfigs(array $options = [])
 * @method CancelMuteAllGroupUser cancelMuteAllGroupUser(array $options = [])
 * @method CancelMuteGroupUser cancelMuteGroupUser(array $options = [])
 * @method CheckLiveMessageUsersInGroup checkLiveMessageUsersInGroup(array $options = [])
 * @method CheckLiveMessageUsersOnline checkLiveMessageUsersOnline(array $options = [])
 * @method CloseLiveShift closeLiveShift(array $options = [])
 * @method CopyCaster copyCaster(array $options = [])
 * @method CopyCasterSceneConfig copyCasterSceneConfig(array $options = [])
 * @method CreateCaster createCaster(array $options = [])
 * @method CreateCustomTemplate createCustomTemplate(array $options = [])
 * @method CreateEdgeTranscodeJob createEdgeTranscodeJob(array $options = [])
 * @method CreateEventSub createEventSub(array $options = [])
 * @method CreateLiveDelayConfig createLiveDelayConfig(array $options = [])
 * @method CreateLiveMessageApp createLiveMessageApp(array $options = [])
 * @method CreateLiveMessageGroup createLiveMessageGroup(array $options = [])
 * @method CreateLivePrivateLine createLivePrivateLine(array $options = [])
 * @method CreateLiveRealTimeLogDelivery createLiveRealTimeLogDelivery(array $options = [])
 * @method CreateLiveStreamMonitor createLiveStreamMonitor(array $options = [])
 * @method CreateLiveStreamRecordIndexFiles createLiveStreamRecordIndexFiles(array $options = [])
 * @method CreateMessageApp createMessageApp(array $options = [])
 * @method CreateMessageGroup createMessageGroup(array $options = [])
 * @method CreateMixStream createMixStream(array $options = [])
 * @method CreateRoomRealTimeStreamAddress createRoomRealTimeStreamAddress(array $options = [])
 * @method CreateRtcAsrTask createRtcAsrTask(array $options = [])
 * @method CreateRtcMPUEventSub createRtcMPUEventSub(array $options = [])
 * @method DeleteCaster deleteCaster(array $options = [])
 * @method DeleteCasterComponent deleteCasterComponent(array $options = [])
 * @method DeleteCasterEpisode deleteCasterEpisode(array $options = [])
 * @method DeleteCasterEpisodeGroup deleteCasterEpisodeGroup(array $options = [])
 * @method DeleteCasterLayout deleteCasterLayout(array $options = [])
 * @method DeleteCasterProgram deleteCasterProgram(array $options = [])
 * @method DeleteCasterSceneConfig deleteCasterSceneConfig(array $options = [])
 * @method DeleteCasterVideoResource deleteCasterVideoResource(array $options = [])
 * @method DeleteChannel deleteChannel(array $options = [])
 * @method DeleteCustomTemplate deleteCustomTemplate(array $options = [])
 * @method DeleteEdgeTranscodeJob deleteEdgeTranscodeJob(array $options = [])
 * @method DeleteEventSub deleteEventSub(array $options = [])
 * @method DeleteLiveAIProduceRules deleteLiveAIProduceRules(array $options = [])
 * @method DeleteLiveAISubtitle deleteLiveAISubtitle(array $options = [])
 * @method DeleteLiveAppRecordConfig deleteLiveAppRecordConfig(array $options = [])
 * @method DeleteLiveAppSnapshotConfig deleteLiveAppSnapshotConfig(array $options = [])
 * @method DeleteLiveAudioAuditConfig deleteLiveAudioAuditConfig(array $options = [])
 * @method DeleteLiveAudioAuditNotifyConfig deleteLiveAudioAuditNotifyConfig(array $options = [])
 * @method DeleteLiveCenterTransfer deleteLiveCenterTransfer(array $options = [])
 * @method DeleteLiveDelayConfig deleteLiveDelayConfig(array $options = [])
 * @method DeleteLiveDetectNotifyConfig deleteLiveDetectNotifyConfig(array $options = [])
 * @method DeleteLiveDomain deleteLiveDomain(array $options = [])
 * @method DeleteLiveDomainMapping deleteLiveDomainMapping(array $options = [])
 * @method DeleteLiveDomainPlayMapping deleteLiveDomainPlayMapping(array $options = [])
 * @method DeleteLiveEdgeTransfer deleteLiveEdgeTransfer(array $options = [])
 * @method DeleteLiveLazyPullStreamInfoConfig deleteLiveLazyPullStreamInfoConfig(array $options = [])
 * @method DeleteLiveMessageGroup deleteLiveMessageGroup(array $options = [])
 * @method DeleteLiveMessageGroupMessage deleteLiveMessageGroupMessage(array $options = [])
 * @method DeleteLiveMessageUserMessage deleteLiveMessageUserMessage(array $options = [])
 * @method DeleteLivePackageConfig deleteLivePackageConfig(array $options = [])
 * @method DeleteLivePrivateLine deleteLivePrivateLine(array $options = [])
 * @method DeleteLivePullStreamInfoConfig deleteLivePullStreamInfoConfig(array $options = [])
 * @method DeleteLiveRealtimeLogDelivery deleteLiveRealtimeLogDelivery(array $options = [])
 * @method DeleteLiveRealTimeLogLogstore deleteLiveRealTimeLogLogstore(array $options = [])
 * @method DeleteLiveRecordNotifyConfig deleteLiveRecordNotifyConfig(array $options = [])
 * @method DeleteLiveRecordVodConfig deleteLiveRecordVodConfig(array $options = [])
 * @method DeleteLiveSnapshotDetectPornConfig deleteLiveSnapshotDetectPornConfig(array $options = [])
 * @method DeleteLiveSnapshotNotifyConfig deleteLiveSnapshotNotifyConfig(array $options = [])
 * @method DeleteLiveSpecificStagingConfig deleteLiveSpecificStagingConfig(array $options = [])
 * @method DeleteLiveStreamBlock deleteLiveStreamBlock(array $options = [])
 * @method DeleteLiveStreamMerge deleteLiveStreamMerge(array $options = [])
 * @method DeleteLiveStreamMonitor deleteLiveStreamMonitor(array $options = [])
 * @method DeleteLiveStreamRecordIndexFiles deleteLiveStreamRecordIndexFiles(array $options = [])
 * @method DeleteLiveStreamsNotifyUrlConfig deleteLiveStreamsNotifyUrlConfig(array $options = [])
 * @method DeleteLiveStreamTranscode deleteLiveStreamTranscode(array $options = [])
 * @method DeleteLiveStreamWatermark deleteLiveStreamWatermark(array $options = [])
 * @method DeleteLiveStreamWatermarkRule deleteLiveStreamWatermarkRule(array $options = [])
 * @method DeleteMessageApp deleteMessageApp(array $options = [])
 * @method DeleteMixStream deleteMixStream(array $options = [])
 * @method DeletePlaylist deletePlaylist(array $options = [])
 * @method DeletePlaylistItems deletePlaylistItems(array $options = [])
 * @method DeleteRtcAsrTask deleteRtcAsrTask(array $options = [])
 * @method DeleteRtcMPUEventSub deleteRtcMPUEventSub(array $options = [])
 * @method DeleteSnapshotCallbackAuth deleteSnapshotCallbackAuth(array $options = [])
 * @method DeleteSnapshotFiles deleteSnapshotFiles(array $options = [])
 * @method DeleteStudioLayout deleteStudioLayout(array $options = [])
 * @method DescribeAutoShowListTasks describeAutoShowListTasks(array $options = [])
 * @method DescribeCasterChannels describeCasterChannels(array $options = [])
 * @method DescribeCasterComponents describeCasterComponents(array $options = [])
 * @method DescribeCasterConfig describeCasterConfig(array $options = [])
 * @method DescribeCasterLayouts describeCasterLayouts(array $options = [])
 * @method DescribeCasterProgram describeCasterProgram(array $options = [])
 * @method DescribeCasters describeCasters(array $options = [])
 * @method DescribeCasterSceneAudio describeCasterSceneAudio(array $options = [])
 * @method DescribeCasterScenes describeCasterScenes(array $options = [])
 * @method DescribeCasterStreamUrl describeCasterStreamUrl(array $options = [])
 * @method DescribeCasterVideoResources describeCasterVideoResources(array $options = [])
 * @method DescribeChannelParticipants describeChannelParticipants(array $options = [])
 * @method DescribeChannelUsers describeChannelUsers(array $options = [])
 * @method DescribeDomainUsageData describeDomainUsageData(array $options = [])
 * @method DescribeDomainWithIntegrity describeDomainWithIntegrity(array $options = [])
 * @method DescribeHlsLiveStreamRealTimeBpsData describeHlsLiveStreamRealTimeBpsData(array $options = [])
 * @method DescribeLiveAIProduceRules describeLiveAIProduceRules(array $options = [])
 * @method DescribeLiveAISubtitle describeLiveAISubtitle(array $options = [])
 * @method DescribeLiveAudioAuditConfig describeLiveAudioAuditConfig(array $options = [])
 * @method DescribeLiveAudioAuditNotifyConfig describeLiveAudioAuditNotifyConfig(array $options = [])
 * @method DescribeLiveCdnDiagnoseInfo describeLiveCdnDiagnoseInfo(array $options = [])
 * @method DescribeLiveCenterStreamRateData describeLiveCenterStreamRateData(array $options = [])
 * @method DescribeLiveCenterTransfer describeLiveCenterTransfer(array $options = [])
 * @method DescribeLiveCertificateDetail describeLiveCertificateDetail(array $options = [])
 * @method DescribeLiveCertificateList describeLiveCertificateList(array $options = [])
 * @method DescribeLiveDelayConfig describeLiveDelayConfig(array $options = [])
 * @method DescribeLiveDelayedStreamingUsage describeLiveDelayedStreamingUsage(array $options = [])
 * @method DescribeLiveDetectNotifyConfig describeLiveDetectNotifyConfig(array $options = [])
 * @method DescribeLiveDetectPornData describeLiveDetectPornData(array $options = [])
 * @method DescribeLiveDomainBpsData describeLiveDomainBpsData(array $options = [])
 * @method DescribeLiveDomainBpsDataByLayer describeLiveDomainBpsDataByLayer(array $options = [])
 * @method DescribeLiveDomainByCertificate describeLiveDomainByCertificate(array $options = [])
 * @method DescribeLiveDomainCertificateInfo describeLiveDomainCertificateInfo(array $options = [])
 * @method DescribeLiveDomainConfigs describeLiveDomainConfigs(array $options = [])
 * @method DescribeLiveDomainDetail describeLiveDomainDetail(array $options = [])
 * @method DescribeLiveDomainEdgeLog describeLiveDomainEdgeLog(array $options = [])
 * @method DescribeLiveDomainFrameRateAndBitRateData describeLiveDomainFrameRateAndBitRateData(array $options = [])
 * @method DescribeLiveDomainLimit describeLiveDomainLimit(array $options = [])
 * @method DescribeLiveDomainLog describeLiveDomainLog(array $options = [])
 * @method DescribeLiveDomainLogExTtl describeLiveDomainLogExTtl(array $options = [])
 * @method DescribeLiveDomainMapping describeLiveDomainMapping(array $options = [])
 * @method DescribeLiveDomainMonitoringUsageData describeLiveDomainMonitoringUsageData(array $options = [])
 * @method DescribeLiveDomainOnlineUserNum describeLiveDomainOnlineUserNum(array $options = [])
 * @method DescribeLiveDomainPublishErrorCode describeLiveDomainPublishErrorCode(array $options = [])
 * @method DescribeLiveDomainPushBpsData describeLiveDomainPushBpsData(array $options = [])
 * @method DescribeLiveDomainPushTrafficData describeLiveDomainPushTrafficData(array $options = [])
 * @method DescribeLiveDomainPvUvData describeLiveDomainPvUvData(array $options = [])
 * @method DescribeLiveDomainRealTimeBpsData describeLiveDomainRealTimeBpsData(array $options = [])
 * @method DescribeLiveDomainRealTimeHttpCodeData describeLiveDomainRealTimeHttpCodeData(array $options = [])
 * @method DescribeLiveDomainRealtimeLogDelivery describeLiveDomainRealtimeLogDelivery(array $options = [])
 * @method DescribeLiveDomainRealTimeTrafficData describeLiveDomainRealTimeTrafficData(array $options = [])
 * @method DescribeLiveDomainRecordUsageData describeLiveDomainRecordUsageData(array $options = [])
 * @method DescribeLiveDomainSnapshotData describeLiveDomainSnapshotData(array $options = [])
 * @method DescribeLiveDomainStagingConfig describeLiveDomainStagingConfig(array $options = [])
 * @method DescribeLiveDomainStreamTranscodeData describeLiveDomainStreamTranscodeData(array $options = [])
 * @method DescribeLiveDomainTimeShiftData describeLiveDomainTimeShiftData(array $options = [])
 * @method DescribeLiveDomainTrafficData describeLiveDomainTrafficData(array $options = [])
 * @method DescribeLiveDomainTranscodeParams describeLiveDomainTranscodeParams(array $options = [])
 * @method DescribeLiveDrmUsageData describeLiveDrmUsageData(array $options = [])
 * @method DescribeLiveEdgeTransfer describeLiveEdgeTransfer(array $options = [])
 * @method DescribeLiveGrtnDuration describeLiveGrtnDuration(array $options = [])
 * @method DescribeLiveHttpsDomainList describeLiveHttpsDomainList(array $options = [])
 * @method DescribeLiveInteractionMetricData describeLiveInteractionMetricData(array $options = [])
 * @method DescribeLiveIpInfo describeLiveIpInfo(array $options = [])
 * @method DescribeLiveLazyPullStreamConfig describeLiveLazyPullStreamConfig(array $options = [])
 * @method DescribeLiveMessageApp describeLiveMessageApp(array $options = [])
 * @method DescribeLiveMessageGroup describeLiveMessageGroup(array $options = [])
 * @method DescribeLiveMessageGroupBand describeLiveMessageGroupBand(array $options = [])
 * @method DescribeLivePackageConfig describeLivePackageConfig(array $options = [])
 * @method DescribeLivePrivateLineAreas describeLivePrivateLineAreas(array $options = [])
 * @method DescribeLivePrivateLineAvailGA describeLivePrivateLineAvailGA(array $options = [])
 * @method DescribeLiveProducerUsageData describeLiveProducerUsageData(array $options = [])
 * @method DescribeLivePullStreamConfig describeLivePullStreamConfig(array $options = [])
 * @method DescribeLivePushProxyLog describeLivePushProxyLog(array $options = [])
 * @method DescribeLivePushProxyUsageData describeLivePushProxyUsageData(array $options = [])
 * @method DescribeLiveRealtimeDeliveryAcc describeLiveRealtimeDeliveryAcc(array $options = [])
 * @method DescribeLiveRealtimeLogAuthorized describeLiveRealtimeLogAuthorized(array $options = [])
 * @method DescribeLiveRecordConfig describeLiveRecordConfig(array $options = [])
 * @method DescribeLiveRecordNotifyConfig describeLiveRecordNotifyConfig(array $options = [])
 * @method DescribeLiveRecordNotifyRecords describeLiveRecordNotifyRecords(array $options = [])
 * @method DescribeLiveRecordVodConfigs describeLiveRecordVodConfigs(array $options = [])
 * @method DescribeLiveShiftConfigs describeLiveShiftConfigs(array $options = [])
 * @method DescribeLiveSnapshotConfig describeLiveSnapshotConfig(array $options = [])
 * @method DescribeLiveSnapshotDetectPornConfig describeLiveSnapshotDetectPornConfig(array $options = [])
 * @method DescribeLiveSnapshotNotifyConfig describeLiveSnapshotNotifyConfig(array $options = [])
 * @method DescribeLiveStreamAuthChecking describeLiveStreamAuthChecking(array $options = [])
 * @method DescribeLiveStreamBitRateData describeLiveStreamBitRateData(array $options = [])
 * @method DescribeLiveStreamCount describeLiveStreamCount(array $options = [])
 * @method DescribeLiveStreamDelayConfig describeLiveStreamDelayConfig(array $options = [])
 * @method DescribeLiveStreamDetailFrameRateAndBitRateData describeLiveStreamDetailFrameRateAndBitRateData(array $options = [])
 * @method DescribeLiveStreamHistoryUserNum describeLiveStreamHistoryUserNum(array $options = [])
 * @method DescribeLiveStreamMerge describeLiveStreamMerge(array $options = [])
 * @method DescribeLiveStreamMetricDetailData describeLiveStreamMetricDetailData(array $options = [])
 * @method DescribeLiveStreamMonitorList describeLiveStreamMonitorList(array $options = [])
 * @method DescribeLiveStreamPreloadTasks describeLiveStreamPreloadTasks(array $options = [])
 * @method DescribeLiveStreamPushMetricDetailData describeLiveStreamPushMetricDetailData(array $options = [])
 * @method DescribeLiveStreamRecordContent describeLiveStreamRecordContent(array $options = [])
 * @method DescribeLiveStreamRecordIndexFile describeLiveStreamRecordIndexFile(array $options = [])
 * @method DescribeLiveStreamRecordIndexFiles describeLiveStreamRecordIndexFiles(array $options = [])
 * @method DescribeLiveStreamsBlockList describeLiveStreamsBlockList(array $options = [])
 * @method DescribeLiveStreamsControlHistory describeLiveStreamsControlHistory(array $options = [])
 * @method DescribeLiveStreamSnapshotInfo describeLiveStreamSnapshotInfo(array $options = [])
 * @method DescribeLiveStreamsNotifyRecords describeLiveStreamsNotifyRecords(array $options = [])
 * @method DescribeLiveStreamsNotifyUrlConfig describeLiveStreamsNotifyUrlConfig(array $options = [])
 * @method DescribeLiveStreamsOnlineList describeLiveStreamsOnlineList(array $options = [])
 * @method DescribeLiveStreamsPublishList describeLiveStreamsPublishList(array $options = [])
 * @method DescribeLiveStreamState describeLiveStreamState(array $options = [])
 * @method DescribeLiveStreamsTotalCount describeLiveStreamsTotalCount(array $options = [])
 * @method DescribeLiveStreamTranscodeInfo describeLiveStreamTranscodeInfo(array $options = [])
 * @method DescribeLiveStreamTranscodeMetricData describeLiveStreamTranscodeMetricData(array $options = [])
 * @method DescribeLiveStreamTranscodeStreamNum describeLiveStreamTranscodeStreamNum(array $options = [])
 * @method DescribeLiveStreamWatermarkRules describeLiveStreamWatermarkRules(array $options = [])
 * @method DescribeLiveStreamWatermarks describeLiveStreamWatermarks(array $options = [])
 * @method DescribeLiveTopDomainsByFlow describeLiveTopDomainsByFlow(array $options = [])
 * @method DescribeLiveUpVideoAudioInfo describeLiveUpVideoAudioInfo(array $options = [])
 * @method DescribeLiveUserBillPrediction describeLiveUserBillPrediction(array $options = [])
 * @method DescribeLiveUserDomains describeLiveUserDomains(array $options = [])
 * @method DescribeLiveUserTags describeLiveUserTags(array $options = [])
 * @method DescribeMeterLiveBypassDuration describeMeterLiveBypassDuration(array $options = [])
 * @method DescribeMixStreamList describeMixStreamList(array $options = [])
 * @method DescribeRtcMPUEventSub describeRtcMPUEventSub(array $options = [])
 * @method DescribeRTSNativeSDKFirstFrameCost describeRTSNativeSDKFirstFrameCost(array $options = [])
 * @method DescribeRTSNativeSDKFirstFrameDelay describeRTSNativeSDKFirstFrameDelay(array $options = [])
 * @method DescribeRTSNativeSDKPlayFailStatus describeRTSNativeSDKPlayFailStatus(array $options = [])
 * @method DescribeRTSNativeSDKPlayTime describeRTSNativeSDKPlayTime(array $options = [])
 * @method DescribeRTSNativeSDKVvData describeRTSNativeSDKVvData(array $options = [])
 * @method DescribeShowList describeShowList(array $options = [])
 * @method DescribeStreamLocationBlock describeStreamLocationBlock(array $options = [])
 * @method DescribeStudioLayouts describeStudioLayouts(array $options = [])
 * @method DescribeToutiaoLivePlay describeToutiaoLivePlay(array $options = [])
 * @method DescribeToutiaoLivePublish describeToutiaoLivePublish(array $options = [])
 * @method DescribeUpBpsPeakData describeUpBpsPeakData(array $options = [])
 * @method DescribeUpBpsPeakOfLine describeUpBpsPeakOfLine(array $options = [])
 * @method DescribeUpPeakPublishStreamData describeUpPeakPublishStreamData(array $options = [])
 * @method DisableLiveRealtimeLogDelivery disableLiveRealtimeLogDelivery(array $options = [])
 * @method DynamicUpdateWaterMarkStreamRule dynamicUpdateWaterMarkStreamRule(array $options = [])
 * @method EditPlaylist editPlaylist(array $options = [])
 * @method EditShowAndReplace editShowAndReplace(array $options = [])
 * @method EffectCasterUrgent effectCasterUrgent(array $options = [])
 * @method EffectCasterVideoResource effectCasterVideoResource(array $options = [])
 * @method EnableLiveRealtimeLogDelivery enableLiveRealtimeLogDelivery(array $options = [])
 * @method ForbidLiveStream forbidLiveStream(array $options = [])
 * @method GetAllCustomTemplates getAllCustomTemplates(array $options = [])
 * @method GetCustomTemplate getCustomTemplate(array $options = [])
 * @method GetEdgeTranscodeJob getEdgeTranscodeJob(array $options = [])
 * @method GetEdgeTranscodeTemplate getEdgeTranscodeTemplate(array $options = [])
 * @method GetEditingJobInfo getEditingJobInfo(array $options = [])
 * @method GetMessageApp getMessageApp(array $options = [])
 * @method GetMessageGroup getMessageGroup(array $options = [])
 * @method GetMessageToken getMessageToken(array $options = [])
 * @method GetTranscodeTaskStatus getTranscodeTaskStatus(array $options = [])
 * @method HotLiveRtcStream hotLiveRtcStream(array $options = [])
 * @method InitializeAutoShowListTask initializeAutoShowListTask(array $options = [])
 * @method JoinMessageGroup joinMessageGroup(array $options = [])
 * @method KickLiveMessageGroupUser kickLiveMessageGroupUser(array $options = [])
 * @method LeaveMessageGroup leaveMessageGroup(array $options = [])
 * @method ListEdgeTranscodeJob listEdgeTranscodeJob(array $options = [])
 * @method ListEdgeTranscodeTemplate listEdgeTranscodeTemplate(array $options = [])
 * @method ListEventSub listEventSub(array $options = [])
 * @method ListEventSubEvent listEventSubEvent(array $options = [])
 * @method ListLiveDelayConfig listLiveDelayConfig(array $options = [])
 * @method ListLiveMessageApps listLiveMessageApps(array $options = [])
 * @method ListLiveMessageGroupByPage listLiveMessageGroupByPage(array $options = [])
 * @method ListLiveMessageGroupMessages listLiveMessageGroupMessages(array $options = [])
 * @method ListLiveMessageGroups listLiveMessageGroups(array $options = [])
 * @method ListLiveMessageGroupUsers listLiveMessageGroupUsers(array $options = [])
 * @method ListLiveRealtimeLogDelivery listLiveRealtimeLogDelivery(array $options = [])
 * @method ListLiveRealtimeLogDeliveryDomains listLiveRealtimeLogDeliveryDomains(array $options = [])
 * @method ListLiveRealtimeLogDeliveryInfos listLiveRealtimeLogDeliveryInfos(array $options = [])
 * @method ListMessage listMessage(array $options = [])
 * @method ListMessageApp listMessageApp(array $options = [])
 * @method ListMessageGroup listMessageGroup(array $options = [])
 * @method ListMessageGroupUser listMessageGroupUser(array $options = [])
 * @method ListMessageGroupUserById listMessageGroupUserById(array $options = [])
 * @method ListMuteGroupUser listMuteGroupUser(array $options = [])
 * @method ListPlaylist listPlaylist(array $options = [])
 * @method ListPlaylistItems listPlaylistItems(array $options = [])
 * @method ListRtcMPUEventSubRecord listRtcMPUEventSubRecord(array $options = [])
 * @method ListRtcMPUTaskDetail listRtcMPUTaskDetail(array $options = [])
 * @method MiguLivePullToPushStart miguLivePullToPushStart(array $options = [])
 * @method MiguLivePullToPushStatus miguLivePullToPushStatus(array $options = [])
 * @method ModifyCasterComponent modifyCasterComponent(array $options = [])
 * @method ModifyCasterEpisode modifyCasterEpisode(array $options = [])
 * @method ModifyCasterLayout modifyCasterLayout(array $options = [])
 * @method ModifyCasterProgram modifyCasterProgram(array $options = [])
 * @method ModifyCasterVideoResource modifyCasterVideoResource(array $options = [])
 * @method ModifyLiveDomainSchdmByProperty modifyLiveDomainSchdmByProperty(array $options = [])
 * @method ModifyLiveMessageAppAudit modifyLiveMessageAppAudit(array $options = [])
 * @method ModifyLiveMessageAppCallback modifyLiveMessageAppCallback(array $options = [])
 * @method ModifyLiveMessageAppDisable modifyLiveMessageAppDisable(array $options = [])
 * @method ModifyLiveMessageGroup modifyLiveMessageGroup(array $options = [])
 * @method ModifyLiveMessageGroupBand modifyLiveMessageGroupBand(array $options = [])
 * @method ModifyLiveMessageUserInfo modifyLiveMessageUserInfo(array $options = [])
 * @method ModifyLiveRealtimeLogDelivery modifyLiveRealtimeLogDelivery(array $options = [])
 * @method ModifyShowList modifyShowList(array $options = [])
 * @method ModifyStudioLayout modifyStudioLayout(array $options = [])
 * @method MuteAllGroupUser muteAllGroupUser(array $options = [])
 * @method MuteGroupUser muteGroupUser(array $options = [])
 * @method OpenLiveShift openLiveShift(array $options = [])
 * @method PlayChoosenShow playChoosenShow(array $options = [])
 * @method PublishLiveStagingConfigToProduction publishLiveStagingConfigToProduction(array $options = [])
 * @method QueryMessageApp queryMessageApp(array $options = [])
 * @method QueryRtcAsrTasks queryRtcAsrTasks(array $options = [])
 * @method QuerySnapshotCallbackAuth querySnapshotCallbackAuth(array $options = [])
 * @method RealTimeRecordCommand realTimeRecordCommand(array $options = [])
 * @method RecoverLiveMessageDeletedGroup recoverLiveMessageDeletedGroup(array $options = [])
 * @method RemoveLiveMessageGroupBand removeLiveMessageGroupBand(array $options = [])
 * @method RemoveShowFromShowList removeShowFromShowList(array $options = [])
 * @method RemoveTerminals removeTerminals(array $options = [])
 * @method RestartCaster restartCaster(array $options = [])
 * @method RestartTranscodeTask restartTranscodeTask(array $options = [])
 * @method ResumeLiveStream resumeLiveStream(array $options = [])
 * @method RollbackLiveStagingConfig rollbackLiveStagingConfig(array $options = [])
 * @method SendLike sendLike(array $options = [])
 * @method SendLiveMessageGroup sendLiveMessageGroup(array $options = [])
 * @method SendLiveMessageUser sendLiveMessageUser(array $options = [])
 * @method SendMessageToGroup sendMessageToGroup(array $options = [])
 * @method SendMessageToGroupUsers sendMessageToGroupUsers(array $options = [])
 * @method SetCasterChannel setCasterChannel(array $options = [])
 * @method SetCasterConfig setCasterConfig(array $options = [])
 * @method SetCasterSceneConfig setCasterSceneConfig(array $options = [])
 * @method SetLiveDomainCertificate setLiveDomainCertificate(array $options = [])
 * @method SetLiveDomainStagingConfig setLiveDomainStagingConfig(array $options = [])
 * @method SetLiveEdgeTransfer setLiveEdgeTransfer(array $options = [])
 * @method SetLiveLazyPullStreamInfoConfig setLiveLazyPullStreamInfoConfig(array $options = [])
 * @method SetLiveMpuTaskSei setLiveMpuTaskSei(array $options = [])
 * @method SetLiveStreamBlock setLiveStreamBlock(array $options = [])
 * @method SetLiveStreamDelayConfig setLiveStreamDelayConfig(array $options = [])
 * @method SetLiveStreamPreloadTasks setLiveStreamPreloadTasks(array $options = [])
 * @method SetLiveStreamsNotifyUrlConfig setLiveStreamsNotifyUrlConfig(array $options = [])
 * @method SetShowListBackground setShowListBackground(array $options = [])
 * @method SetSnapshotCallbackAuth setSnapshotCallbackAuth(array $options = [])
 * @method StartCaster startCaster(array $options = [])
 * @method StartCasterScene startCasterScene(array $options = [])
 * @method StartEdgeTranscodeJob startEdgeTranscodeJob(array $options = [])
 * @method StartLiveDomain startLiveDomain(array $options = [])
 * @method StartLiveMPUTask startLiveMPUTask(array $options = [])
 * @method StartLiveStreamMonitor startLiveStreamMonitor(array $options = [])
 * @method StartPlaylist startPlaylist(array $options = [])
 * @method StopCaster stopCaster(array $options = [])
 * @method StopCasterScene stopCasterScene(array $options = [])
 * @method StopEdgeTranscodeJob stopEdgeTranscodeJob(array $options = [])
 * @method StopLiveDomain stopLiveDomain(array $options = [])
 * @method StopLiveMPUTask stopLiveMPUTask(array $options = [])
 * @method StopLiveStreamMonitor stopLiveStreamMonitor(array $options = [])
 * @method StopPlaylist stopPlaylist(array $options = [])
 * @method StopRtcAsrTask stopRtcAsrTask(array $options = [])
 * @method UnbanLiveMessageGroup unbanLiveMessageGroup(array $options = [])
 * @method UpdateCasterResourceGroup updateCasterResourceGroup(array $options = [])
 * @method UpdateCasterSceneAudio updateCasterSceneAudio(array $options = [])
 * @method UpdateCasterSceneConfig updateCasterSceneConfig(array $options = [])
 * @method UpdateCustomLiveStreamTranscode updateCustomLiveStreamTranscode(array $options = [])
 * @method UpdateEdgeTranscodeJob updateEdgeTranscodeJob(array $options = [])
 * @method UpdateEventSub updateEventSub(array $options = [])
 * @method UpdateLiveAIProduceRules updateLiveAIProduceRules(array $options = [])
 * @method UpdateLiveAISubtitle updateLiveAISubtitle(array $options = [])
 * @method UpdateLiveAppRecordConfig updateLiveAppRecordConfig(array $options = [])
 * @method UpdateLiveAppSnapshotConfig updateLiveAppSnapshotConfig(array $options = [])
 * @method UpdateLiveAudioAuditConfig updateLiveAudioAuditConfig(array $options = [])
 * @method UpdateLiveAudioAuditNotifyConfig updateLiveAudioAuditNotifyConfig(array $options = [])
 * @method UpdateLiveCenterTransfer updateLiveCenterTransfer(array $options = [])
 * @method UpdateLiveDelayConfig updateLiveDelayConfig(array $options = [])
 * @method UpdateLiveDetectNotifyConfig updateLiveDetectNotifyConfig(array $options = [])
 * @method UpdateLiveMPUTask updateLiveMPUTask(array $options = [])
 * @method UpdateLivePackageConfig updateLivePackageConfig(array $options = [])
 * @method UpdateLivePullStreamInfoConfig updateLivePullStreamInfoConfig(array $options = [])
 * @method UpdateLiveRecordNotifyConfig updateLiveRecordNotifyConfig(array $options = [])
 * @method UpdateLiveRecordVodConfig updateLiveRecordVodConfig(array $options = [])
 * @method UpdateLiveSnapshotDetectPornConfig updateLiveSnapshotDetectPornConfig(array $options = [])
 * @method UpdateLiveSnapshotNotifyConfig updateLiveSnapshotNotifyConfig(array $options = [])
 * @method UpdateLiveStreamMonitor updateLiveStreamMonitor(array $options = [])
 * @method UpdateLiveStreamTranscode updateLiveStreamTranscode(array $options = [])
 * @method UpdateLiveStreamWatermark updateLiveStreamWatermark(array $options = [])
 * @method UpdateLiveStreamWatermarkRule updateLiveStreamWatermarkRule(array $options = [])
 * @method UpdateMessageApp updateMessageApp(array $options = [])
 * @method UpdateMessageGroup updateMessageGroup(array $options = [])
 * @method UpdateMixStream updateMixStream(array $options = [])
 * @method UpdateRtcMPUEventSub updateRtcMPUEventSub(array $options = [])
 * @method UpdateRtsLiveStreamTranscode updateRtsLiveStreamTranscode(array $options = [])
 * @method VerifyLiveDomainOwner verifyLiveDomainOwner(array $options = [])
 */
class LiveApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'live';

    /** @var string */
    public $version = '2016-11-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'live';
}

/**
 * @method string getHtmlLayerContent()
 * @method $this withHtmlLayerContent($value)
 * @method string getImageLayerContent()
 * @method $this withImageLayerContent($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getLayerOrder()
 * @method $this withLayerOrder($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getComponentLayer()
 * @method $this withComponentLayer($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getLocationId()
 * @method $this withLocationId($value)
 * @method string getEffect()
 * @method $this withEffect($value)
 * @method string getCaptionLayerContent()
 * @method $this withCaptionLayerContent($value)
 * @method string getTextLayerContent()
 * @method $this withTextLayerContent($value)
 */
class AddCasterComponent extends Rpc
{
}

/**
 * @method string getEpisodeName()
 * @method $this withEpisodeName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEpisodeType()
 * @method $this withEpisodeType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
 */
class AddCasterEpisode extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
	public function withComponentId(array $componentId)
	{
	    $this->data['ComponentId'] = $componentId;
		foreach ($componentId as $i => $iValue) {
			$this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSideOutputUrl()
 * @method $this withSideOutputUrl($value)
 * @method array getItem()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class AddCasterEpisodeGroup extends Rpc
{

    /**
     * @param array $item
     *
     * @return $this
     */
	public function withItem(array $item)
	{
	    $this->data['Item'] = $item;
		foreach ($item as $depth1 => $depth1Value) {
			if(isset($depth1Value['ItemName'])){
				$this->options['query']['Item.' . ($depth1 + 1) . '.ItemName'] = $depth1Value['ItemName'];
			}
			if(isset($depth1Value['VodUrl'])){
				$this->options['query']['Item.' . ($depth1 + 1) . '.VodUrl'] = $depth1Value['VodUrl'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterEpisodeGroupContent extends Rpc
{
}

/**
 * @method array getBlendList()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method array getMixList()
 */
class AddCasterLayout extends Rpc
{

    /**
     * @param array $blendList
     *
     * @return $this
     */
	public function withBlendList(array $blendList)
	{
	    $this->data['BlendList'] = $blendList;
		foreach ($blendList as $i => $iValue) {
			$this->options['query']['BlendList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
	public function withAudioLayer(array $audioLayer)
	{
	    $this->data['AudioLayer'] = $audioLayer;
		foreach ($audioLayer as $depth1 => $depth1Value) {
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
			if(isset($depth1Value['ValidChannel'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
			}
			if(isset($depth1Value['VolumeRate'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
			}
		}

		return $this;
    }

    /**
     * @param array $videoLayer
     *
     * @return $this
     */
	public function withVideoLayer(array $videoLayer)
	{
	    $this->data['VideoLayer'] = $videoLayer;
		foreach ($videoLayer as $depth1 => $depth1Value) {
			if(isset($depth1Value['FillMode'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FillMode'] = $depth1Value['FillMode'];
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
			if(isset($depth1Value['HeightNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.HeightNormalized'] = $depth1Value['HeightNormalized'];
			}
			foreach ($depth1Value['PositionNormalized'] as $i => $iValue) {
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionNormalized.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['PositionRefer'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionRefer'] = $depth1Value['PositionRefer'];
			}
			if(isset($depth1Value['WidthNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.WidthNormalized'] = $depth1Value['WidthNormalized'];
			}
		}

		return $this;
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
	public function withMixList(array $mixList)
	{
	    $this->data['MixList'] = $mixList;
		foreach ($mixList as $i => $iValue) {
			$this->options['query']['MixList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getEpisode()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddCasterProgram extends Rpc
{

    /**
     * @param array $episode
     *
     * @return $this
     */
	public function withEpisode(array $episode)
	{
	    $this->data['Episode'] = $episode;
		foreach ($episode as $depth1 => $depth1Value) {
			foreach ($depth1Value['ComponentId'] as $i => $iValue) {
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ComponentId.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['EndTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['EpisodeName'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeName'] = $depth1Value['EpisodeName'];
			}
			if(isset($depth1Value['EpisodeType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeType'] = $depth1Value['EpisodeType'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			}
			if(isset($depth1Value['SwitchType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.SwitchType'] = $depth1Value['SwitchType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getInputType()
 * @method $this withInputType($value)
 * @method string getEndOffset()
 * @method $this withEndOffset($value)
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getVodUrl()
 * @method $this withVodUrl($value)
 * @method string getStreamId()
 * @method $this withStreamId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStreamMonitor()
 * @method $this withStreamMonitor($value)
 * @method string getBeginOffset()
 * @method $this withBeginOffset($value)
 * @method string getFixedDelayDuration()
 * @method $this withFixedDelayDuration($value)
 * @method string getLiveStreamUrl()
 * @method $this withLiveStreamUrl($value)
 * @method string getLocationId()
 * @method $this withLocationId($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 * @method string getPtsCallbackInterval()
 * @method $this withPtsCallbackInterval($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 */
class AddCasterVideoResource extends Rpc
{
}

/**
 * @method string getResWithSource()
 * @method $this withResWithSource($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getAudioCodec()
 * @method $this withAudioCodec($value)
 * @method string getKmsUID()
 * @method $this withKmsUID($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExtWithSource()
 * @method $this withExtWithSource($value)
 * @method string getBitrateWithSource()
 * @method $this withBitrateWithSource($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getKmsKeyExpireInterval()
 * @method $this withKmsKeyExpireInterval($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioProfile()
 * @method $this withAudioProfile($value)
 * @method string getEncryptParameters()
 * @method $this withEncryptParameters($value)
 * @method string getAudioChannelNum()
 * @method $this withAudioChannelNum($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getAudioRate()
 * @method $this withAudioRate($value)
 * @method string getFpsWithSource()
 * @method $this withFpsWithSource($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 * @method string getKmsKeyID()
 * @method $this withKmsKeyID($value)
 */
class AddCustomLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSubtitleName()
 * @method $this withSubtitleName($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsLazy()
 * @method $this withIsLazy($value)
 * @method string getLiveTemplate()
 * @method $this withLiveTemplate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getIsOrigin()
 * @method $this withIsOrigin($value)
 */
class AddLiveAIProduceRules extends Rpc
{
}

/**
 * @method string getSrcLanguage()
 * @method $this withSrcLanguage($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFontName()
 * @method $this withFontName($value)
 * @method string getSubtitleName()
 * @method $this withSubtitleName($value)
 * @method string getFontSizeNormalized()
 * @method $this withFontSizeNormalized($value)
 * @method string getFontColor()
 * @method $this withFontColor($value)
 * @method string getShowSourceLan()
 * @method $this withShowSourceLan($value)
 * @method string getPositionNormalized()
 * @method $this withPositionNormalized($value)
 * @method string getBorderWidthNormalized()
 * @method $this withBorderWidthNormalized($value)
 * @method string getMaxLines()
 * @method $this withMaxLines($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getWordPerLine()
 * @method $this withWordPerLine($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBgWidthNormalized()
 * @method $this withBgWidthNormalized($value)
 * @method string getBgColor()
 * @method $this withBgColor($value)
 * @method string getDstLanguage()
 * @method $this withDstLanguage($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getCopyFrom()
 * @method $this withCopyFrom($value)
 */
class AddLiveAISubtitle extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method array getTranscodeTemplates()
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTranscodeRecordFormat()
 * @method string getOnDemand()
 * @method $this withOnDemand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRecordFormat()
 */
class AddLiveAppRecordConfig extends Rpc
{

    /**
     * @param array $transcodeTemplates
     *
     * @return $this
     */
	public function withTranscodeTemplates(array $transcodeTemplates)
	{
	    $this->data['TranscodeTemplates'] = $transcodeTemplates;
		foreach ($transcodeTemplates as $i => $iValue) {
			$this->options['query']['TranscodeTemplates.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $transcodeRecordFormat
     *
     * @return $this
     */
	public function withTranscodeRecordFormat(array $transcodeRecordFormat)
	{
	    $this->data['TranscodeRecordFormat'] = $transcodeRecordFormat;
		foreach ($transcodeRecordFormat as $depth1 => $depth1Value) {
			if(isset($depth1Value['SliceOssObjectPrefix'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.SliceOssObjectPrefix'] = $depth1Value['SliceOssObjectPrefix'];
			}
			if(isset($depth1Value['SliceDuration'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.SliceDuration'] = $depth1Value['SliceDuration'];
			}
			if(isset($depth1Value['OssObjectPrefix'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.OssObjectPrefix'] = $depth1Value['OssObjectPrefix'];
			}
			if(isset($depth1Value['Format'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['CycleDuration'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.CycleDuration'] = $depth1Value['CycleDuration'];
			}
		}

		return $this;
    }

    /**
     * @param array $recordFormat
     *
     * @return $this
     */
	public function withRecordFormat(array $recordFormat)
	{
	    $this->data['RecordFormat'] = $recordFormat;
		foreach ($recordFormat as $depth1 => $depth1Value) {
			if(isset($depth1Value['SliceOssObjectPrefix'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.SliceOssObjectPrefix'] = $depth1Value['SliceOssObjectPrefix'];
			}
			if(isset($depth1Value['SliceDuration'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.SliceDuration'] = $depth1Value['SliceDuration'];
			}
			if(isset($depth1Value['OssObjectPrefix'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.OssObjectPrefix'] = $depth1Value['OssObjectPrefix'];
			}
			if(isset($depth1Value['Format'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['CycleDuration'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.CycleDuration'] = $depth1Value['CycleDuration'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOverwriteOssObject()
 * @method $this withOverwriteOssObject($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSequenceOssObject()
 * @method $this withSequenceOssObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class AddLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class AddLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackTemplate()
 * @method $this withCallbackTemplate($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class AddLiveAudioAuditNotifyConfig extends Rpc
{
}

/**
 * @method string getTransferArgs()
 * @method $this withTransferArgs($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDstUrl()
 * @method $this withDstUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveCenterTransfer extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getTopLevelDomain()
 * @method $this withTopLevelDomain($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getCheckUrl()
 * @method $this withCheckUrl($value)
 * @method string getLiveDomainType()
 * @method $this withLiveDomainType($value)
 */
class AddLiveDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class AddLiveDomainMapping extends Rpc
{
}

/**
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class AddLiveDomainPlayMapping extends Rpc
{
}

/**
 * @method string getBannedUsers()
 * @method $this withBannedUsers($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class AddLiveMessageGroupBand extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSegmentNum()
 * @method $this withSegmentNum($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPartDuration()
 * @method $this withPartDuration($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getIgnoreTranscode()
 * @method $this withIgnoreTranscode($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSegmentDuration()
 * @method $this withSegmentDuration($value)
 */
class AddLivePackageConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getPullAlways()
 * @method $this withPullAlways($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 * @method $this withSourceUrl($value)
 */
class AddLivePullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getOnDemandUrl()
 * @method $this withOnDemandUrl($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getNeedStatusNotify()
 * @method $this withNeedStatusNotify($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getAutoCompose()
 * @method $this withAutoCompose($value)
 * @method string getComposeVodTranscodeGroupId()
 * @method $this withComposeVodTranscodeGroupId($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getOnDemand()
 * @method $this withOnDemand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getVodTranscodeGroupId()
 * @method $this withVodTranscodeGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCycleDuration()
 * @method $this withCycleDuration($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveRecordVodConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method array getScene()
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class AddLiveSnapshotDetectPornConfig extends Rpc
{

    /**
     * @param array $scene
     *
     * @return $this
     */
	public function withScene(array $scene)
	{
	    $this->data['Scene'] = $scene;
		foreach ($scene as $i => $iValue) {
			$this->options['query']['Scene.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNotifyReqAuth()
 * @method $this withNotifyReqAuth($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNotifyAuthKey()
 * @method $this withNotifyAuthKey($value)
 */
class AddLiveSnapshotNotifyConfig extends Rpc
{
}

/**
 * @method string getInAppName2()
 * @method $this withInAppName2($value)
 * @method string getInAppName1()
 * @method $this withInAppName1($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getInStreamName2()
 * @method $this withInStreamName2($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getInStreamName1()
 * @method $this withInStreamName1($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AddLiveStreamMerge extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getMix()
 * @method $this withMix($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEncryptParameters()
 * @method $this withEncryptParameters($value)
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWaterPattern()
 * @method $this withWaterPattern($value)
 * @method string getOnlyAudio()
 * @method $this withOnlyAudio($value)
 */
class AddLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getYOffset()
 * @method $this withYOffset($value)
 * @method string getPictureUrl()
 * @method $this withPictureUrl($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getXOffset()
 * @method $this withXOffset($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRefWidth()
 * @method $this withRefWidth($value)
 * @method string getTransparency()
 * @method $this withTransparency($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOffsetCorner()
 * @method $this withOffsetCorner($value)
 * @method string getRefHeight()
 * @method $this withRefHeight($value)
 */
class AddLiveStreamWatermark extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getName()
 * @method $this withName($value)
 */
class AddLiveStreamWatermarkRule extends Rpc
{
}

/**
 * @method string getProgramItems()
 * @method $this withProgramItems($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProgramConfig()
 * @method $this withProgramConfig($value)
 */
class AddPlaylistItems extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getDeleteBframes()
 * @method $this withDeleteBframes($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getOpus()
 * @method $this withOpus($value)
 * @method string getAudioCodec()
 * @method $this withAudioCodec($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioProfile()
 * @method $this withAudioProfile($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getAudioChannelNum()
 * @method $this withAudioChannelNum($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAudioRate()
 * @method $this withAudioRate($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 */
class AddRtsLiveStreamTranscode extends Rpc
{
}

/**
 * @method array getShowList()
 * @method string getLiveInputType()
 * @method $this withLiveInputType($value)
 * @method string getIsBatchMode()
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getRepeatTimes()
 * @method $this withRepeatTimes($value)
 * @method string getShowName()
 * @method $this withShowName($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceUrl()
 * @method $this withResourceUrl($value)
 * @method string getSpot()
 * @method $this withSpot($value)
 */
class AddShowIntoShowList extends Rpc
{

    /**
     * @param array $showList
     *
     * @return $this
     */
	public function withShowList(array $showList)
	{
	    $this->data['ShowList'] = $showList;
		foreach ($showList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Duration'])){
				$this->options['query']['showList.' . ($depth1 + 1) . '.duration'] = $depth1Value['Duration'];
			}
			if(isset($depth1Value['LiveInputType'])){
				$this->options['query']['showList.' . ($depth1 + 1) . '.liveInputType'] = $depth1Value['LiveInputType'];
			}
			if(isset($depth1Value['RepeatTimes'])){
				$this->options['query']['showList.' . ($depth1 + 1) . '.repeatTimes'] = $depth1Value['RepeatTimes'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['showList.' . ($depth1 + 1) . '.resourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['ResourceType'])){
				$this->options['query']['showList.' . ($depth1 + 1) . '.resourceType'] = $depth1Value['ResourceType'];
			}
			if(isset($depth1Value['ResourceUrl'])){
				$this->options['query']['showList.' . ($depth1 + 1) . '.resourceUrl'] = $depth1Value['ResourceUrl'];
			}
			if(isset($depth1Value['ShowName'])){
				$this->options['query']['showList.' . ($depth1 + 1) . '.showName'] = $depth1Value['ShowName'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsBatchMode($value)
    {
        $this->data['IsBatchMode'] = $value;
        $this->options['query']['isBatchMode'] = $value;

        return $this;
    }
}

/**
 * @method string getScreenInputConfigList()
 * @method $this withScreenInputConfigList($value)
 * @method string getLayoutType()
 * @method $this withLayoutType($value)
 * @method string getLayoutName()
 * @method $this withLayoutName($value)
 * @method string getLayerOrderConfigList()
 * @method $this withLayerOrderConfigList($value)
 * @method string getMediaInputConfigList()
 * @method $this withMediaInputConfigList($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getBgImageConfig()
 * @method $this withBgImageConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommonConfig()
 * @method $this withCommonConfig($value)
 */
class AddStudioLayout extends Rpc
{
}

/**
 * @method string getPattern()
 * @method $this withPattern($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getRepeat()
 * @method $this withRepeat($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDelay()
 * @method $this withDelay($value)
 */
class AddTrancodeSEI extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getExceptUsers()
 * @method $this withExceptUsers($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class BanLiveMessageGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchDeleteLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method string getUserIds()
 * @method string getAppId()
 */
class BatchGetOnlineUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserIds($value)
    {
        $this->data['UserIds'] = $value;
        $this->options['form_params']['UserIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class BatchSetLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getOperatorUserId()
 * @method string getBroadCastType()
 * @method string getGroupId()
 * @method string getAppId()
 */
class CancelMuteAllGroupUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastType($value)
    {
        $this->data['BroadCastType'] = $value;
        $this->options['form_params']['BroadCastType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getCancelMuteUserList()
 * @method string getOperatorUserId()
 * @method string getBroadCastType()
 * @method string getGroupId()
 * @method string getAppId()
 */
class CancelMuteGroupUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCancelMuteUserList($value)
    {
        $this->data['CancelMuteUserList'] = $value;
        $this->options['form_params']['CancelMuteUserList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastType($value)
    {
        $this->data['BroadCastType'] = $value;
        $this->options['form_params']['BroadCastType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CheckLiveMessageUsersInGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CheckLiveMessageUsersOnline extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CloseLiveShift extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getSrcCasterId()
 * @method $this withSrcCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyCaster extends Rpc
{
}

/**
 * @method string getFromSceneId()
 * @method $this withFromSceneId($value)
 * @method string getToSceneId()
 * @method $this withToSceneId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CopyCasterSceneConfig extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getCasterTemplate()
 * @method $this withCasterTemplate($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getNormType()
 * @method $this withNormType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPurchaseTime()
 * @method $this withPurchaseTime($value)
 * @method string getMicMode()
 * @method $this withMicMode($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateCaster extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getCustomTemplate()
 * @method $this withCustomTemplate($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateCustomTemplate extends Rpc
{
}

/**
 * @method string getStreamInput()
 * @method $this withStreamInput($value)
 * @method string getStreamOutput()
 * @method $this withStreamOutput($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateEdgeTranscodeJob extends Rpc
{
}

/**
 * @method array getUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method array getEvents()
 */
class CreateEventSub extends Rpc
{

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['query']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $events
     *
     * @return $this
     */
	public function withEvents(array $events)
	{
	    $this->data['Events'] = $events;
		foreach ($events as $i => $iValue) {
			$this->options['query']['Events.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskTriggerMode()
 * @method $this withTaskTriggerMode($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateLiveDelayConfig extends Rpc
{
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getMsgLifeCycle()
 * @method $this withMsgLifeCycle($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAuditType()
 * @method $this withAuditType($value)
 * @method string getAuditUrl()
 * @method $this withAuditUrl($value)
 * @method string getEventCallbackUrl()
 * @method $this withEventCallbackUrl($value)
 */
class CreateLiveMessageApp extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupInfo()
 * @method $this withGroupInfo($value)
 * @method string getCreatorId()
 * @method $this withCreatorId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAdministrators()
 * @method $this withAdministrators($value)
 */
class CreateLiveMessageGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getMaxBandwidth()
 * @method $this withMaxBandwidth($value)
 * @method string getReuse()
 * @method $this withReuse($value)
 * @method string getAccelerationArea()
 * @method $this withAccelerationArea($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVideoCenter()
 * @method $this withVideoCenter($value)
 * @method string getAccelerationType()
 * @method $this withAccelerationType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateLivePrivateLine extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class CreateLiveRealTimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getMonitorConfig()
 * @method $this withMonitorConfig($value)
 * @method string getMonitorName()
 * @method $this withMonitorName($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getOutputTemplate()
 * @method $this withOutputTemplate($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getInputList()
 * @method $this withInputList($value)
 * @method string getDingTalkWebHookUrl()
 * @method $this withDingTalkWebHookUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class CreateLiveStreamMonitor extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEndTimeIncluded()
 * @method $this withEndTimeIncluded($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateLiveStreamRecordIndexFiles extends Rpc
{
}

/**
 * @method string getExtension()
 * @method string getAppConfig()
 * @method string getAppName()
 */
class CreateMessageApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtension($value)
    {
        $this->data['Extension'] = $value;
        $this->options['form_params']['Extension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppConfig($value)
    {
        $this->data['AppConfig'] = $value;
        $this->options['form_params']['AppConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }
}

/**
 * @method string getExtension()
 * @method string getCreatorId()
 * @method string getAppId()
 */
class CreateMessageGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtension($value)
    {
        $this->data['Extension'] = $value;
        $this->options['form_params']['Extension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreatorId($value)
    {
        $this->data['CreatorId'] = $value;
        $this->options['form_params']['CreatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getOutputConfig()
 * @method $this withOutputConfig($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getInputStreamList()
 * @method $this withInputStreamList($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackConfig()
 * @method $this withCallbackConfig($value)
 */
class CreateMixStream extends Rpc
{
}

/**
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateRoomRealTimeStreamAddress extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getLanguage()
 * @method $this withLanguage($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getTranslateEnabled()
 * @method $this withTranslateEnabled($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getTargetLanguages()
 * @method $this withTargetLanguages($value)
 * @method string getAutoTerminateEnabled()
 * @method $this withAutoTerminateEnabled($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRtcUserId()
 * @method $this withRtcUserId($value)
 * @method string getReportInterval()
 * @method $this withReportInterval($value)
 * @method string getAutoTerminateDelay()
 * @method $this withAutoTerminateDelay($value)
 * @method string getSDKAppID()
 * @method $this withSDKAppID($value)
 * @method string getCallbackURL()
 * @method $this withCallbackURL($value)
 * @method string getChannelID()
 * @method $this withChannelID($value)
 */
class CreateRtcAsrTask extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getChannelIds()
 * @method $this withChannelIds($value)
 */
class CreateRtcMPUEventSub extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCaster extends Rpc
{
}

/**
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterComponent extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
 */
class DeleteCasterEpisode extends Rpc
{
}

/**
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterEpisodeGroup extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterLayout extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterProgram extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DeleteCasterSceneConfig extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCasterVideoResource extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DeleteChannel extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCustomTemplate extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteEdgeTranscodeJob extends Rpc
{
}

/**
 * @method string getSubscribeId()
 * @method $this withSubscribeId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteEventSub extends Rpc
{
}

/**
 * @method string getRulesId()
 * @method $this withRulesId($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSuffixName()
 * @method $this withSuffixName($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteLiveAIProduceRules extends Rpc
{
}

/**
 * @method string getSubtitleName()
 * @method $this withSubtitleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubtitleId()
 * @method $this withSubtitleId($value)
 */
class DeleteLiveAISubtitle extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAppRecordConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveAudioAuditNotifyConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDstUrl()
 * @method $this withDstUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveCenterTransfer extends Rpc
{
}

/**
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteLiveDelayConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DeleteLiveDomain extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class DeleteLiveDomainMapping extends Rpc
{
}

/**
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullDomain()
 * @method $this withPullDomain($value)
 */
class DeleteLiveDomainPlayMapping extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveEdgeTransfer extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class DeleteLiveLazyPullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 */
class DeleteLiveMessageGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDeleterId()
 * @method $this withDeleterId($value)
 * @method string getDeleterInfo()
 * @method $this withDeleterInfo($value)
 */
class DeleteLiveMessageGroupMessage extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getReceiverId()
 * @method $this withReceiverId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getDeleterId()
 * @method $this withDeleterId($value)
 * @method string getDeleterInfo()
 * @method $this withDeleterInfo($value)
 */
class DeleteLiveMessageUserMessage extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLivePackageConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAccelerationType()
 * @method $this withAccelerationType($value)
 */
class DeleteLivePrivateLine extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLivePullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class DeleteLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class DeleteLiveRealTimeLogLogstore extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveRecordVodConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveSnapshotDetectPornConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveSnapshotNotifyConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 */
class DeleteLiveSpecificStagingConfig extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveStreamBlock extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveStreamMerge extends Rpc
{
}

/**
 * @method string getMonitorId()
 * @method $this withMonitorId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveStreamMonitor extends Rpc
{
}

/**
 * @method string getRemoveFile()
 * @method $this withRemoveFile($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRecordId()
 */
class DeleteLiveStreamRecordIndexFiles extends Rpc
{

    /**
     * @param array $recordId
     *
     * @return $this
     */
	public function withRecordId(array $recordId)
	{
	    $this->data['RecordId'] = $recordId;
		foreach ($recordId as $i => $iValue) {
			$this->options['query']['RecordId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteLiveStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteLiveStreamWatermark extends Rpc
{
}

/**
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteLiveStreamWatermarkRule extends Rpc
{
}

/**
 * @method string getAppId()
 */
class DeleteMessageApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getMixStreamId()
 * @method $this withMixStreamId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteMixStream extends Rpc
{
}

/**
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePlaylist extends Rpc
{
}

/**
 * @method string getProgramItemIds()
 * @method $this withProgramItemIds($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePlaylistItems extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRtcAsrTask extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteRtcMPUEventSub extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteSnapshotCallbackAuth extends Rpc
{
}

/**
 * @method string getRemoveFile()
 * @method $this withRemoveFile($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getCreateTimestampList()
 */
class DeleteSnapshotFiles extends Rpc
{

    /**
     * @param array $createTimestampList
     *
     * @return $this
     */
	public function withCreateTimestampList(array $createTimestampList)
	{
	    $this->data['CreateTimestampList'] = $createTimestampList;
		foreach ($createTimestampList as $i => $iValue) {
			$this->options['query']['CreateTimestampList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteStudioLayout extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAutoShowListTasks extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterChannels extends Rpc
{
}

/**
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterComponents extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterConfig extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterLayouts extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEpisodeType()
 * @method $this withEpisodeType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCasterProgram extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNormType()
 * @method $this withNormType($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderByModifyAsc()
 * @method $this withOrderByModifyAsc($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCasters extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DescribeCasterSceneAudio extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class DescribeCasterScenes extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterStreamUrl extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeCasterVideoResources extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class DescribeChannelParticipants extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeChannelUsers extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDataProtocol()
 * @method $this withDataProtocol($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getField()
 * @method $this withField($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeDomainUsageData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIntegrity()
 * @method $this withIntegrity($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainWithIntegrity extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTime()
 * @method $this withTime($value)
 */
class DescribeHlsLiveStreamRealTimeBpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRulesId()
 * @method $this withRulesId($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSuffixName()
 * @method $this withSuffixName($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeLiveAIProduceRules extends Rpc
{
}

/**
 * @method string getSubtitleName()
 * @method $this withSubtitleName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDefault()
 * @method $this withIsDefault($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSubtitleId()
 * @method $this withSubtitleId($value)
 */
class DescribeLiveAISubtitle extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveAudioAuditNotifyConfig extends Rpc
{
}

/**
 * @method string getIntervalType()
 * @method string getStreamSuffix()
 * @method string getStartTime()
 * @method string getRequestType()
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method string getApp()
 * @method string getPhase()
 * @method string getEndTime()
 * @method string getDomain()
 */
class DescribeLiveCdnDiagnoseInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalType($value)
    {
        $this->data['IntervalType'] = $value;
        $this->options['query']['intervalType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStreamSuffix($value)
    {
        $this->data['StreamSuffix'] = $value;
        $this->options['query']['streamSuffix'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['query']['startTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestType($value)
    {
        $this->data['RequestType'] = $value;
        $this->options['query']['requestType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStreamName($value)
    {
        $this->data['StreamName'] = $value;
        $this->options['query']['streamName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApp($value)
    {
        $this->data['App'] = $value;
        $this->options['query']['app'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhase($value)
    {
        $this->data['Phase'] = $value;
        $this->options['query']['phase'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['query']['endTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['query']['domain'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 */
class DescribeLiveCenterStreamRateData extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDstUrl()
 * @method $this withDstUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveCenterTransfer extends Rpc
{
}

/**
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveCertificateDetail extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveCertificateList extends Rpc
{
}

/**
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeLiveDelayConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLiveDelayedStreamingUsage extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getFee()
 * @method $this withFee($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLiveDetectPornData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainBpsData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getLayer()
 * @method $this withLayer($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainBpsDataByLayer extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLStatus()
 * @method $this withSSLStatus($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 */
class DescribeLiveDomainByCertificate extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainCertificateInfo extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveDomainConfigs extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class DescribeLiveDomainDetail extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainEdgeLog extends Rpc
{
}

/**
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainFrameRateAndBitRateData extends Rpc
{
}

/**
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainLimit extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainLog extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainLogExTtl extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainMapping extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLiveDomainMonitoringUsageData extends Rpc
{
}

/**
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainOnlineUserNum extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainPublishErrorCode extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainPushBpsData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainPushTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainPvUvData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealTimeBpsData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealTimeHttpCodeData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainRealTimeTrafficData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLiveDomainRecordUsageData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainSnapshotData extends Rpc
{
}

/**
 * @method string getFunctionNames()
 * @method $this withFunctionNames($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveDomainStagingConfig extends Rpc
{
}

/**
 * @method string getPrecision()
 * @method $this withPrecision($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplit()
 * @method $this withSplit($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainStreamTranscodeData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainTimeShiftData extends Rpc
{
}

/**
 * @method string getLocationNameEn()
 * @method $this withLocationNameEn($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIspNameEn()
 * @method $this withIspNameEn($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDomainTrafficData extends Rpc
{
}

/**
 * @method string getPushdomain()
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getApp()
 * @method string getTemplateName()
 */
class DescribeLiveDomainTranscodeParams extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPushdomain($value)
    {
        $this->data['Pushdomain'] = $value;
        $this->options['query']['pushdomain'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApp($value)
    {
        $this->data['App'] = $value;
        $this->options['query']['app'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateName($value)
    {
        $this->data['TemplateName'] = $value;
        $this->options['query']['template_name'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveDrmUsageData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveEdgeTransfer extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeLiveGrtnDuration extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveHttpsDomainList extends Rpc
{
}

/**
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getEndTs()
 * @method $this withEndTs($value)
 * @method string getOs()
 * @method $this withOs($value)
 * @method string getBeginTs()
 * @method $this withBeginTs($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTerminalType()
 * @method $this withTerminalType($value)
 */
class DescribeLiveInteractionMetricData extends Rpc
{
}

/**
 * @method string getMethod()
 * @method $this withMethod($value)
 * @method string getIP()
 * @method $this withIP($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveIpInfo extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveLazyPullStreamConfig extends Rpc
{
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeLiveMessageApp extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeLiveMessageGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeLiveMessageGroupBand extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLivePackageConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLivePrivateLineAreas extends Rpc
{
}

/**
 * @method string getAccelerationArea()
 * @method $this withAccelerationArea($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVideoCenter()
 * @method $this withVideoCenter($value)
 * @method string getIsGaInstance()
 * @method $this withIsGaInstance($value)
 */
class DescribeLivePrivateLineAvailGA extends Rpc
{
}

/**
 * @method string getInstance()
 * @method $this withInstance($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getApp()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLiveProducerUsageData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApp($value)
    {
        $this->data['App'] = $value;
        $this->options['query']['app'] = $value;

        return $this;
    }
}

/**
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLivePullStreamConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLivePushProxyLog extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSplitBy()
 * @method $this withSplitBy($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeLivePushProxyUsageData extends Rpc
{
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class DescribeLiveRealtimeDeliveryAcc extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLiveOpenapiReserve()
 * @method $this withLiveOpenapiReserve($value)
 */
class DescribeLiveRealtimeLogAuthorized extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveRecordConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeLiveRecordNotifyRecords extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveRecordVodConfigs extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveShiftConfigs extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveSnapshotConfig extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveSnapshotDetectPornConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveSnapshotNotifyConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUrl()
 * @method $this withUrl($value)
 */
class DescribeLiveStreamAuthChecking extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamBitRateData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamCount extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamDelayConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamDetailFrameRateAndBitRateData extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamHistoryUserNum extends Rpc
{
}

/**
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamMerge extends Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamMetricDetailData extends Rpc
{
}

/**
 * @method string getMonitorId()
 * @method $this withMonitorId($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOrderRule()
 * @method $this withOrderRule($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeLiveStreamMonitorList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlayUrl()
 * @method $this withPlayUrl($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeLiveStreamPreloadTasks extends Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamPushMetricDetailData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamRecordContent extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 */
class DescribeLiveStreamRecordIndexFile extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamRecordIndexFiles extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsBlockList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRows()
 * @method $this withRows($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class DescribeLiveStreamsControlHistory extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamSnapshotInfo extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeLiveStreamsNotifyRecords extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getOnlyStream()
 * @method $this withOnlyStream($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsGetCurrentRate()
 * @method $this withIsGetCurrentRate($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsOnlineList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsPublishList extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamState extends Rpc
{
}

/**
 * @method string getTyp()
 * @method $this withTyp($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamsTotalCount extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainTranscodeName()
 * @method $this withDomainTranscodeName($value)
 */
class DescribeLiveStreamTranscodeInfo extends Rpc
{
}

/**
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamTranscodeMetricData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveStreamTranscodeStreamNum extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeLiveStreamWatermarkRules extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeLiveStreamWatermarks extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveTopDomainsByFlow extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveUpVideoAudioInfo extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveUserBillPrediction extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRegionName()
 * @method $this withRegionName($value)
 * @method array getTag()
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainSearchType()
 * @method $this withDomainSearchType($value)
 * @method string getLiveDomainType()
 * @method $this withLiveDomainType($value)
 */
class DescribeLiveUserDomains extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeLiveUserTags extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeMeterLiveBypassDuration extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getMixStreamId()
 * @method $this withMixStreamId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 */
class DescribeMixStreamList extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRtcMPUEventSub extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomainNameList()
 * @method $this withDomainNameList($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataInterval()
 * @method $this withDataInterval($value)
 */
class DescribeRTSNativeSDKFirstFrameCost extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomainNameList()
 * @method $this withDomainNameList($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataInterval()
 * @method $this withDataInterval($value)
 */
class DescribeRTSNativeSDKFirstFrameDelay extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomainNameList()
 * @method $this withDomainNameList($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataInterval()
 * @method $this withDataInterval($value)
 */
class DescribeRTSNativeSDKPlayFailStatus extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomainNameList()
 * @method $this withDomainNameList($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataInterval()
 * @method $this withDataInterval($value)
 */
class DescribeRTSNativeSDKPlayTime extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getDomainNameList()
 * @method $this withDomainNameList($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataInterval()
 * @method $this withDataInterval($value)
 */
class DescribeRTSNativeSDKVvData extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeShowList extends Rpc
{
}

/**
 * @method string getBlockType()
 * @method $this withBlockType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStreamLocationBlock extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeStudioLayouts extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeToutiaoLivePlay extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DescribeToutiaoLivePublish extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpBpsPeakData extends Rpc
{
}

/**
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpBpsPeakOfLine extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomainSwitch()
 * @method $this withDomainSwitch($value)
 */
class DescribeUpPeakPublishStreamData extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisableLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DynamicUpdateWaterMarkStreamRule extends Rpc
{
}

/**
 * @method string getProgramItems()
 * @method $this withProgramItems($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProgramConfig()
 * @method $this withProgramConfig($value)
 */
class EditPlaylist extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getStorageInfo()
 * @method $this withStorageInfo($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getShowId()
 * @method $this withShowId($value)
 */
class EditShowAndReplace extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class EffectCasterUrgent extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class EffectCasterVideoResource extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnableLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getControlStreamAction()
 * @method $this withControlStreamAction($value)
 * @method string getResumeTime()
 * @method $this withResumeTime($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOneshot()
 * @method $this withOneshot($value)
 */
class ForbidLiveStream extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetAllCustomTemplates extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetCustomTemplate extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetEdgeTranscodeJob extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class GetEdgeTranscodeTemplate extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getShowId()
 * @method $this withShowId($value)
 */
class GetEditingJobInfo extends Rpc
{
}

/**
 * @method string getAppId()
 */
class GetMessageApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getAppId()
 */
class GetMessageGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method string getDeviceType()
 * @method string getDeviceId()
 * @method string getAppId()
 */
class GetMessageToken extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['form_params']['DeviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getTranscodingTemplate()
 * @method $this withTranscodingTemplate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getApp()
 * @method $this withApp($value)
 */
class GetTranscodeTaskStatus extends Rpc
{
}

/**
 * @method string getVideoMsid()
 * @method $this withVideoMsid($value)
 * @method string getRegionCode()
 * @method $this withRegionCode($value)
 * @method string getConnectionTimeout()
 * @method $this withConnectionTimeout($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAudioMsid()
 * @method $this withAudioMsid($value)
 * @method string getMediaTimeout()
 * @method $this withMediaTimeout($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class HotLiveRtcStream extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getCasterConfig()
 * @method $this withCasterConfig($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallBackUrl()
 * @method $this withCallBackUrl($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class InitializeAutoShowListTask extends Rpc
{
}

/**
 * @method string getUserId()
 * @method string getBroadCastType()
 * @method string getBroadCastStatistics()
 * @method string getGroupId()
 * @method string getAppId()
 */
class JoinMessageGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastType($value)
    {
        $this->data['BroadCastType'] = $value;
        $this->options['form_params']['BroadCastType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastStatistics($value)
    {
        $this->data['BroadCastStatistics'] = $value;
        $this->options['form_params']['BroadCastStatistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getKickoffUser()
 * @method $this withKickoffUser($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class KickLiveMessageGroupUser extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getUserId()
 * @method string getBroadCastType()
 * @method string getBroadCastStatistics()
 * @method string getGroupId()
 * @method string getAppId()
 */
class LeaveMessageGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastType($value)
    {
        $this->data['BroadCastType'] = $value;
        $this->options['form_params']['BroadCastType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastStatistics($value)
    {
        $this->data['BroadCastStatistics'] = $value;
        $this->options['form_params']['BroadCastStatistics'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListEdgeTranscodeJob extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getVideoCodec()
 * @method $this withVideoCodec($value)
 */
class ListEdgeTranscodeTemplate extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ListEventSub extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSubscribeId()
 * @method $this withSubscribeId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListEventSubEvent extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class ListLiveDelayConfig extends Rpc
{
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 */
class ListLiveMessageApps extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getGroupStatus()
 * @method $this withGroupStatus($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListLiveMessageGroupByPage extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMsgType()
 * @method $this withMsgType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ListLiveMessageGroupMessages extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getGroupStatus()
 * @method $this withGroupStatus($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ListLiveMessageGroups extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getNextPageToken()
 * @method $this withNextPageToken($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListLiveMessageGroupUsers extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLiveOpenapiReserve()
 * @method $this withLiveOpenapiReserve($value)
 */
class ListLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class ListLiveRealtimeLogDeliveryDomains extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLiveOpenapiReserve()
 * @method $this withLiveOpenapiReserve($value)
 */
class ListLiveRealtimeLogDeliveryInfos extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getSortType()
 * @method string getType()
 * @method string getPageNum()
 * @method string getPageSize()
 * @method string getGroupId()
 * @method string getAppId()
 */
class ListMessage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortType($value)
    {
        $this->data['SortType'] = $value;
        $this->options['form_params']['SortType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getSortType()
 * @method string getPageNum()
 * @method string getPageSize()
 */
class ListMessageApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortType($value)
    {
        $this->data['SortType'] = $value;
        $this->options['form_params']['SortType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getSortType()
 * @method string getPageNum()
 * @method string getUserId()
 * @method string getPageSize()
 * @method string getAppId()
 */
class ListMessageGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortType($value)
    {
        $this->data['SortType'] = $value;
        $this->options['form_params']['SortType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getSortType()
 * @method string getPageNum()
 * @method string getPageSize()
 * @method string getGroupId()
 * @method string getAppId()
 */
class ListMessageGroupUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortType($value)
    {
        $this->data['SortType'] = $value;
        $this->options['form_params']['SortType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserIdList()
 * @method string getGroupId()
 * @method string getAppId()
 */
class ListMessageGroupUserById extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserIdList($value)
    {
        $this->data['UserIdList'] = $value;
        $this->options['form_params']['UserIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNum()
 * @method string getPageSize()
 * @method string getOperatorUserId()
 * @method string getGroupId()
 * @method string getAppId()
 */
class ListMuteGroupUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPage()
 * @method $this withPage($value)
 */
class ListPlaylist extends Rpc
{
}

/**
 * @method string getProgramItemIds()
 * @method $this withProgramItemIds($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ListPlaylistItems extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSubId()
 * @method $this withSubId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRtcMPUEventSubRecord extends Rpc
{
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ListRtcMPUTaskDetail extends Rpc
{
}

/**
 * @method string getMiguData()
 * @method $this withMiguData($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class MiguLivePullToPushStart extends Rpc
{
}

/**
 * @method string getMiguData()
 * @method $this withMiguData($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class MiguLivePullToPushStatus extends Rpc
{
}

/**
 * @method string getImageLayerContent()
 * @method $this withImageLayerContent($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getComponentLayer()
 * @method $this withComponentLayer($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getEffect()
 * @method $this withEffect($value)
 * @method string getCaptionLayerContent()
 * @method $this withCaptionLayerContent($value)
 * @method string getTextLayerContent()
 * @method $this withTextLayerContent($value)
 */
class ModifyCasterComponent extends Rpc
{
}

/**
 * @method string getEpisodeName()
 * @method $this withEpisodeName($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getEpisodeId()
 * @method $this withEpisodeId($value)
 * @method string getSwitchType()
 * @method $this withSwitchType($value)
 */
class ModifyCasterEpisode extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
	public function withComponentId(array $componentId)
	{
	    $this->data['ComponentId'] = $componentId;
		foreach ($componentId as $i => $iValue) {
			$this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getBlendList()
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAudioLayer()
 * @method array getVideoLayer()
 * @method array getMixList()
 */
class ModifyCasterLayout extends Rpc
{

    /**
     * @param array $blendList
     *
     * @return $this
     */
	public function withBlendList(array $blendList)
	{
	    $this->data['BlendList'] = $blendList;
		foreach ($blendList as $i => $iValue) {
			$this->options['query']['BlendList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
	public function withAudioLayer(array $audioLayer)
	{
	    $this->data['AudioLayer'] = $audioLayer;
		foreach ($audioLayer as $depth1 => $depth1Value) {
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
			if(isset($depth1Value['ValidChannel'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
			}
			if(isset($depth1Value['VolumeRate'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
			}
		}

		return $this;
    }

    /**
     * @param array $videoLayer
     *
     * @return $this
     */
	public function withVideoLayer(array $videoLayer)
	{
	    $this->data['VideoLayer'] = $videoLayer;
		foreach ($videoLayer as $depth1 => $depth1Value) {
			if(isset($depth1Value['FillMode'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FillMode'] = $depth1Value['FillMode'];
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
			if(isset($depth1Value['HeightNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.HeightNormalized'] = $depth1Value['HeightNormalized'];
			}
			foreach ($depth1Value['PositionNormalized'] as $i => $iValue) {
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionNormalized.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['PositionRefer'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.PositionRefer'] = $depth1Value['PositionRefer'];
			}
			if(isset($depth1Value['WidthNormalized'])){
				$this->options['query']['VideoLayer.' . ($depth1 + 1) . '.WidthNormalized'] = $depth1Value['WidthNormalized'];
			}
		}

		return $this;
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
	public function withMixList(array $mixList)
	{
	    $this->data['MixList'] = $mixList;
		foreach ($mixList as $i => $iValue) {
			$this->options['query']['MixList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getEpisode()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCasterProgram extends Rpc
{

    /**
     * @param array $episode
     *
     * @return $this
     */
	public function withEpisode(array $episode)
	{
	    $this->data['Episode'] = $episode;
		foreach ($episode as $depth1 => $depth1Value) {
			foreach ($depth1Value['ComponentId'] as $i => $iValue) {
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ComponentId.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['EndTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['EpisodeId'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeId'] = $depth1Value['EpisodeId'];
			}
			if(isset($depth1Value['EpisodeName'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeName'] = $depth1Value['EpisodeName'];
			}
			if(isset($depth1Value['EpisodeType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.EpisodeType'] = $depth1Value['EpisodeType'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['StartTime'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
			}
			if(isset($depth1Value['SwitchType'])){
				$this->options['query']['Episode.' . ($depth1 + 1) . '.SwitchType'] = $depth1Value['SwitchType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getInputType()
 * @method $this withInputType($value)
 * @method string getEndOffset()
 * @method $this withEndOffset($value)
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getVodUrl()
 * @method $this withVodUrl($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBeginOffset()
 * @method $this withBeginOffset($value)
 * @method string getLiveStreamUrl()
 * @method $this withLiveStreamUrl($value)
 * @method string getImageUrl()
 * @method $this withImageUrl($value)
 * @method string getPtsCallbackInterval()
 * @method $this withPtsCallbackInterval($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 * @method string getRepeatNum()
 * @method $this withRepeatNum($value)
 */
class ModifyCasterVideoResource extends Rpc
{
}

/**
 * @method string getProperty()
 * @method $this withProperty($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyLiveDomainSchdmByProperty extends Rpc
{
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAuditType()
 * @method $this withAuditType($value)
 * @method string getAuditUrl()
 * @method $this withAuditUrl($value)
 */
class ModifyLiveMessageAppAudit extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getEventCallbackUrl()
 * @method $this withEventCallbackUrl($value)
 */
class ModifyLiveMessageAppCallback extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getDisable()
 * @method $this withDisable($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ModifyLiveMessageAppDisable extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupInfo()
 * @method $this withGroupInfo($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getModifyInfo()
 * @method $this withModifyInfo($value)
 * @method string getAdminList()
 * @method $this withAdminList($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getModifyAdmin()
 * @method $this withModifyAdmin($value)
 */
class ModifyLiveMessageGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getBannedAll()
 * @method $this withBannedAll($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getExceptUsers()
 * @method $this withExceptUsers($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getBannnedUsers()
 * @method $this withBannnedUsers($value)
 */
class ModifyLiveMessageGroupBand extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getUserMetaInfo()
 * @method $this withUserMetaInfo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ModifyLiveMessageUserInfo extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getProject()
 * @method $this withProject($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getLogstore()
 * @method $this withLogstore($value)
 */
class ModifyLiveRealtimeLogDelivery extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRepeatTimes()
 * @method $this withRepeatTimes($value)
 * @method string getHighPriorityShowStartTime()
 * @method $this withHighPriorityShowStartTime($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getHighPriorityShowId()
 * @method $this withHighPriorityShowId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getShowId()
 * @method $this withShowId($value)
 * @method string getSpot()
 * @method $this withSpot($value)
 */
class ModifyShowList extends Rpc
{
}

/**
 * @method string getScreenInputConfigList()
 * @method $this withScreenInputConfigList($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getLayoutName()
 * @method $this withLayoutName($value)
 * @method string getLayerOrderConfigList()
 * @method $this withLayerOrderConfigList($value)
 * @method string getMediaInputConfigList()
 * @method $this withMediaInputConfigList($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getBgImageConfig()
 * @method $this withBgImageConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommonConfig()
 * @method $this withCommonConfig($value)
 */
class ModifyStudioLayout extends Rpc
{
}

/**
 * @method string getOperatorUserId()
 * @method string getBroadCastType()
 * @method string getGroupId()
 * @method string getAppId()
 */
class MuteAllGroupUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastType($value)
    {
        $this->data['BroadCastType'] = $value;
        $this->options['form_params']['BroadCastType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getMuteUserList()
 * @method string getOperatorUserId()
 * @method string getBroadCastType()
 * @method string getGroupId()
 * @method string getMuteTime()
 * @method string getAppId()
 */
class MuteGroupUser extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMuteUserList($value)
    {
        $this->data['MuteUserList'] = $value;
        $this->options['form_params']['MuteUserList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastType($value)
    {
        $this->data['BroadCastType'] = $value;
        $this->options['form_params']['BroadCastType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMuteTime($value)
    {
        $this->data['MuteTime'] = $value;
        $this->options['form_params']['MuteTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getIgnoreTranscode()
 * @method $this withIgnoreTranscode($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVision()
 * @method $this withVision($value)
 */
class OpenLiveShift extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getShowId()
 * @method $this withShowId($value)
 */
class PlayChoosenShow extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class PublishLiveStagingConfigToProduction extends Rpc
{
}

/**
 * @method string getSortType()
 * @method string getPageNum()
 * @method string getAppName()
 * @method string getPageSize()
 * @method string getAppId()
 */
class QueryMessageApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSortType($value)
    {
        $this->data['SortType'] = $value;
        $this->options['form_params']['SortType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryRtcAsrTasks extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySnapshotCallbackAuth extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 */
class RealTimeRecordCommand extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RecoverLiveMessageDeletedGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getUnbannedUsers()
 * @method $this withUnbannedUsers($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RemoveLiveMessageGroupBand extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIsBatchMode()
 * @method array getShowIdList()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getShowId()
 * @method $this withShowId($value)
 */
class RemoveShowFromShowList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsBatchMode($value)
    {
        $this->data['IsBatchMode'] = $value;
        $this->options['query']['isBatchMode'] = $value;

        return $this;
    }

    /**
     * @param array $showIdList
     *
     * @return $this
     */
	public function withShowIdList(array $showIdList)
	{
	    $this->data['ShowIdList'] = $showIdList;
		foreach ($showIdList as $i => $iValue) {
			$this->options['query']['showIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getTerminalIds()
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class RemoveTerminals extends Rpc
{

    /**
     * @param array $terminalIds
     *
     * @return $this
     */
	public function withTerminalIds(array $terminalIds)
	{
	    $this->data['TerminalIds'] = $terminalIds;
		foreach ($terminalIds as $i => $iValue) {
			$this->options['query']['TerminalIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RestartCaster extends Rpc
{
}

/**
 * @method string getTranscodingTemplate()
 * @method $this withTranscodingTemplate($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getPushDomain()
 * @method $this withPushDomain($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getApp()
 * @method $this withApp($value)
 */
class RestartTranscodeTask extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getLiveStreamType()
 * @method $this withLiveStreamType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ResumeLiveStream extends Rpc
{
}

/**
 * @method string getFunctionName()
 * @method $this withFunctionName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class RollbackLiveStagingConfig extends Rpc
{
}

/**
 * @method string getOperatorUserId()
 * @method string getBroadCastType()
 * @method string getGroupId()
 * @method string getCount()
 * @method string getAppId()
 */
class SendLike extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBroadCastType($value)
    {
        $this->data['BroadCastType'] = $value;
        $this->options['form_params']['BroadCastType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['form_params']['Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getSenderMetaInfo()
 * @method $this withSenderMetaInfo($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getStaticsIncrease()
 * @method $this withStaticsIncrease($value)
 * @method string getNoCache()
 * @method $this withNoCache($value)
 * @method string getMsgType()
 * @method $this withMsgType($value)
 * @method string getNoStorage()
 * @method $this withNoStorage($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getMsgTid()
 * @method $this withMsgTid($value)
 * @method string getSenderId()
 * @method $this withSenderId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class SendLiveMessageGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getMsgTid()
 * @method $this withMsgTid($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getSenderId()
 * @method $this withSenderId($value)
 * @method string getReceiverId()
 * @method $this withReceiverId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getSenderInfo()
 * @method $this withSenderInfo($value)
 * @method string getMsgType()
 * @method $this withMsgType($value)
 */
class SendLiveMessageUser extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getData()
 * @method string getSkipAudit()
 * @method $this withSkipAudit($value)
 * @method string getType()
 * @method string getOperatorUserId()
 * @method string getGroupId()
 * @method string getAppId()
 */
class SendMessageToGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getSkipAudit()
 * @method $this withSkipAudit($value)
 * @method string getType()
 * @method string getOperatorUserId()
 * @method string getReceiverIdList()
 * @method string getGroupId()
 * @method string getAppId()
 */
class SendMessageToGroupUsers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatorUserId($value)
    {
        $this->data['OperatorUserId'] = $value;
        $this->options['form_params']['OperatorUserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReceiverIdList($value)
    {
        $this->data['ReceiverIdList'] = $value;
        $this->options['form_params']['ReceiverIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getFaceBeauty()
 * @method $this withFaceBeauty($value)
 * @method string getSeekOffset()
 * @method $this withSeekOffset($value)
 * @method string getPlayStatus()
 * @method $this withPlayStatus($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEnableSeekResume()
 * @method $this withEnableSeekResume($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getReloadFlag()
 * @method $this withReloadFlag($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class SetCasterChannel extends Rpc
{
}

/**
 * @method string getChannelEnable()
 * @method $this withChannelEnable($value)
 * @method string getProgramEffect()
 * @method $this withProgramEffect($value)
 * @method string getProgramName()
 * @method $this withProgramName($value)
 * @method string getUrgentImageUrl()
 * @method $this withUrgentImageUrl($value)
 * @method string getRecordConfig()
 * @method $this withRecordConfig($value)
 * @method string getUrgentMaterialId()
 * @method $this withUrgentMaterialId($value)
 * @method string getTranscodeConfig()
 * @method $this withTranscodeConfig($value)
 * @method string getCasterName()
 * @method $this withCasterName($value)
 * @method string getAutoSwitchUrgentOn()
 * @method $this withAutoSwitchUrgentOn($value)
 * @method string getAutoSwitchUrgentConfig()
 * @method $this withAutoSwitchUrgentConfig($value)
 * @method string getUrgentLiveStreamUrl()
 * @method $this withUrgentLiveStreamUrl($value)
 * @method string getSideOutputUrl()
 * @method $this withSideOutputUrl($value)
 * @method string getSyncGroupsConfig()
 * @method $this withSyncGroupsConfig($value)
 * @method string getSideOutputUrlList()
 * @method $this withSideOutputUrlList($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDelay()
 * @method $this withDelay($value)
 * @method string getUrgentImageId()
 * @method $this withUrgentImageId($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class SetCasterConfig extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class SetCasterSceneConfig extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
	public function withComponentId(array $componentId)
	{
	    $this->data['ComponentId'] = $componentId;
		foreach ($componentId as $i => $iValue) {
			$this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getSSLProtocol()
 * @method $this withSSLProtocol($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getSSLPri()
 * @method $this withSSLPri($value)
 * @method string getForceSet()
 * @method $this withForceSet($value)
 * @method string getCertName()
 * @method $this withCertName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSSLPub()
 * @method $this withSSLPub($value)
 */
class SetLiveDomainCertificate extends Rpc
{
}

/**
 * @method string getFunctions()
 * @method $this withFunctions($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetLiveDomainStagingConfig extends Rpc
{
}

/**
 * @method string getTransferArgs()
 * @method $this withTransferArgs($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getTargetDomainList()
 * @method $this withTargetDomainList($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHttpDns()
 * @method $this withHttpDns($value)
 */
class SetLiveEdgeTransfer extends Rpc
{
}

/**
 * @method string getPullArgs()
 * @method $this withPullArgs($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getLiveapiRequestFrom()
 * @method $this withLiveapiRequestFrom($value)
 * @method string getPullAuthKey()
 * @method $this withPullAuthKey($value)
 * @method string getPullAuthType()
 * @method $this withPullAuthType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPullDomainName()
 * @method $this withPullDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPullAppName()
 * @method $this withPullAppName($value)
 * @method string getTranscodeLazy()
 * @method $this withTranscodeLazy($value)
 * @method string getPullProtocol()
 * @method $this withPullProtocol($value)
 */
class SetLiveLazyPullStreamInfoConfig extends Rpc
{
}

/**
 * @method string getCustomSei()
 * @method $this withCustomSei($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class SetLiveMpuTaskSei extends Rpc
{
}

/**
 * @method string getLocationList()
 * @method $this withLocationList($value)
 * @method string getBlockType()
 * @method $this withBlockType($value)
 * @method string getReleaseTime()
 * @method $this withReleaseTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetLiveStreamBlock extends Rpc
{
}

/**
 * @method string getFlvLevel()
 * @method $this withFlvLevel($value)
 * @method string getHlsLevel()
 * @method $this withHlsLevel($value)
 * @method string getRtmpDelay()
 * @method $this withRtmpDelay($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlvDelay()
 * @method $this withFlvDelay($value)
 * @method string getRtmpLevel()
 * @method $this withRtmpLevel($value)
 * @method string getHlsDelay()
 * @method $this withHlsDelay($value)
 */
class SetLiveStreamDelayConfig extends Rpc
{
}

/**
 * @method string getPreloadedStartTime()
 * @method $this withPreloadedStartTime($value)
 * @method string getArea()
 * @method $this withArea($value)
 * @method string getPreloadedEndTime()
 * @method $this withPreloadedEndTime($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPlayUrl()
 * @method $this withPlayUrl($value)
 */
class SetLiveStreamPreloadTasks extends Rpc
{
}

/**
 * @method string getAuthKey()
 * @method $this withAuthKey($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getNotifyReqAuth()
 * @method $this withNotifyReqAuth($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNotifyAuthKey()
 * @method $this withNotifyAuthKey($value)
 */
class SetLiveStreamsNotifyUrlConfig extends Rpc
{
}

/**
 * @method string getMaterialId()
 * @method $this withMaterialId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceUrl()
 * @method $this withResourceUrl($value)
 */
class SetShowListBackground extends Rpc
{
}

/**
 * @method string getCallbackAuthKey()
 * @method $this withCallbackAuthKey($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackReqAuth()
 * @method $this withCallbackReqAuth($value)
 */
class SetSnapshotCallbackAuth extends Rpc
{
}

/**
 * @method string getPlayerType()
 * @method $this withPlayerType($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartCaster extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StartCasterScene extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartEdgeTranscodeJob extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class StartLiveDomain extends Rpc
{
}

/**
 * @method string getSingleSubParams()
 * @method $this withSingleSubParams($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getMultiStreamURL()
 * @method $this withMultiStreamURL($value)
 * @method string getSeiParams()
 * @method $this withSeiParams($value)
 * @method string getTranscodeParams()
 * @method $this withTranscodeParams($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMixMode()
 * @method $this withMixMode($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class StartLiveMPUTask extends Rpc
{
}

/**
 * @method string getMonitorId()
 * @method $this withMonitorId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartLiveStreamMonitor extends Rpc
{
}

/**
 * @method string getResumeMode()
 * @method $this withResumeMode($value)
 * @method string getStartItemId()
 * @method $this withStartItemId($value)
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartPlaylist extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopCaster extends Rpc
{
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class StopCasterScene extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopEdgeTranscodeJob extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 */
class StopLiveDomain extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopLiveMPUTask extends Rpc
{
}

/**
 * @method string getMonitorId()
 * @method $this withMonitorId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopLiveStreamMonitor extends Rpc
{
}

/**
 * @method string getProgramId()
 * @method $this withProgramId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopPlaylist extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StopRtcAsrTask extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDataCenter()
 * @method $this withDataCenter($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UnbanLiveMessageGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class UpdateCasterResourceGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getAudioLayer()
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method array getMixList()
 * @method string getFollowEnable()
 * @method $this withFollowEnable($value)
 */
class UpdateCasterSceneAudio extends Rpc
{

    /**
     * @param array $audioLayer
     *
     * @return $this
     */
	public function withAudioLayer(array $audioLayer)
	{
	    $this->data['AudioLayer'] = $audioLayer;
		foreach ($audioLayer as $depth1 => $depth1Value) {
			if(isset($depth1Value['Filter'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.Filter'] = $depth1Value['Filter'];
			}
			if(isset($depth1Value['FixedDelayDuration'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.FixedDelayDuration'] = $depth1Value['FixedDelayDuration'];
			}
			if(isset($depth1Value['ValidChannel'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.ValidChannel'] = $depth1Value['ValidChannel'];
			}
			if(isset($depth1Value['VolumeRate'])){
				$this->options['query']['AudioLayer.' . ($depth1 + 1) . '.VolumeRate'] = $depth1Value['VolumeRate'];
			}
		}

		return $this;
    }

    /**
     * @param array $mixList
     *
     * @return $this
     */
	public function withMixList(array $mixList)
	{
	    $this->data['MixList'] = $mixList;
		foreach ($mixList as $i => $iValue) {
			$this->options['query']['MixList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method array getComponentId()
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 */
class UpdateCasterSceneConfig extends Rpc
{

    /**
     * @param array $componentId
     *
     * @return $this
     */
	public function withComponentId(array $componentId)
	{
	    $this->data['ComponentId'] = $componentId;
		foreach ($componentId as $i => $iValue) {
			$this->options['query']['ComponentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getResWithSource()
 * @method $this withResWithSource($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getAudioCodec()
 * @method $this withAudioCodec($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioProfile()
 * @method $this withAudioProfile($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEncryptParameters()
 * @method $this withEncryptParameters($value)
 * @method string getAudioChannelNum()
 * @method $this withAudioChannelNum($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getExtWithSource()
 * @method $this withExtWithSource($value)
 * @method string getBitrateWithSource()
 * @method $this withBitrateWithSource($value)
 * @method string getAudioRate()
 * @method $this withAudioRate($value)
 * @method string getFpsWithSource()
 * @method $this withFpsWithSource($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 */
class UpdateCustomLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getStreamInput()
 * @method $this withStreamInput($value)
 * @method string getStreamOutput()
 * @method $this withStreamOutput($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateEdgeTranscodeJob extends Rpc
{
}

/**
 * @method string getSubscribeId()
 * @method $this withSubscribeId($value)
 * @method array getUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method array getEvents()
 */
class UpdateEventSub extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['query']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $events
     *
     * @return $this
     */
	public function withEvents(array $events)
	{
	    $this->data['Events'] = $events;
		foreach ($events as $i => $iValue) {
			$this->options['query']['Events.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSubtitleName()
 * @method $this withSubtitleName($value)
 * @method string getRulesId()
 * @method $this withRulesId($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIsLazy()
 * @method $this withIsLazy($value)
 * @method string getLiveTemplate()
 * @method $this withLiveTemplate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getIsOrigin()
 * @method $this withIsOrigin($value)
 * @method string getSubtitleId()
 * @method $this withSubtitleId($value)
 */
class UpdateLiveAIProduceRules extends Rpc
{
}

/**
 * @method string getSrcLanguage()
 * @method $this withSrcLanguage($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getFontName()
 * @method $this withFontName($value)
 * @method string getSubtitleName()
 * @method $this withSubtitleName($value)
 * @method string getFontSizeNormalized()
 * @method $this withFontSizeNormalized($value)
 * @method string getFontColor()
 * @method $this withFontColor($value)
 * @method string getShowSourceLan()
 * @method $this withShowSourceLan($value)
 * @method string getPositionNormalized()
 * @method $this withPositionNormalized($value)
 * @method string getBorderWidthNormalized()
 * @method $this withBorderWidthNormalized($value)
 * @method string getMaxLines()
 * @method $this withMaxLines($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getWordPerLine()
 * @method $this withWordPerLine($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBgWidthNormalized()
 * @method $this withBgWidthNormalized($value)
 * @method string getBgColor()
 * @method $this withBgColor($value)
 * @method string getDstLanguage()
 * @method $this withDstLanguage($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getSubtitleId()
 * @method $this withSubtitleId($value)
 */
class UpdateLiveAISubtitle extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method array getTranscodeTemplates()
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method array getTranscodeRecordFormat()
 * @method string getOnDemand()
 * @method $this withOnDemand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getRecordFormat()
 */
class UpdateLiveAppRecordConfig extends Rpc
{

    /**
     * @param array $transcodeTemplates
     *
     * @return $this
     */
	public function withTranscodeTemplates(array $transcodeTemplates)
	{
	    $this->data['TranscodeTemplates'] = $transcodeTemplates;
		foreach ($transcodeTemplates as $i => $iValue) {
			$this->options['query']['TranscodeTemplates.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $transcodeRecordFormat
     *
     * @return $this
     */
	public function withTranscodeRecordFormat(array $transcodeRecordFormat)
	{
	    $this->data['TranscodeRecordFormat'] = $transcodeRecordFormat;
		foreach ($transcodeRecordFormat as $depth1 => $depth1Value) {
			if(isset($depth1Value['SliceDuration'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.SliceDuration'] = $depth1Value['SliceDuration'];
			}
			if(isset($depth1Value['Format'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['CycleDuration'])){
				$this->options['query']['TranscodeRecordFormat.' . ($depth1 + 1) . '.CycleDuration'] = $depth1Value['CycleDuration'];
			}
		}

		return $this;
    }

    /**
     * @param array $recordFormat
     *
     * @return $this
     */
	public function withRecordFormat(array $recordFormat)
	{
	    $this->data['RecordFormat'] = $recordFormat;
		foreach ($recordFormat as $depth1 => $depth1Value) {
			if(isset($depth1Value['SliceDuration'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.SliceDuration'] = $depth1Value['SliceDuration'];
			}
			if(isset($depth1Value['Format'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.Format'] = $depth1Value['Format'];
			}
			if(isset($depth1Value['CycleDuration'])){
				$this->options['query']['RecordFormat.' . ($depth1 + 1) . '.CycleDuration'] = $depth1Value['CycleDuration'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOverwriteOssObject()
 * @method $this withOverwriteOssObject($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSequenceOssObject()
 * @method $this withSequenceOssObject($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class UpdateLiveAppSnapshotConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 */
class UpdateLiveAudioAuditConfig extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCallbackTemplate()
 * @method $this withCallbackTemplate($value)
 * @method string getCallback()
 * @method $this withCallback($value)
 */
class UpdateLiveAudioAuditNotifyConfig extends Rpc
{
}

/**
 * @method string getTransferArgs()
 * @method $this withTransferArgs($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getDstUrl()
 * @method $this withDstUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveCenterTransfer extends Rpc
{
}

/**
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTaskTriggerMode()
 * @method $this withTaskTriggerMode($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class UpdateLiveDelayConfig extends Rpc
{
}

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveDetectNotifyConfig extends Rpc
{
}

/**
 * @method string getMultiStreamURL()
 * @method $this withMultiStreamURL($value)
 * @method string getSingleSubParams()
 * @method $this withSingleSubParams($value)
 * @method string getSeiParams()
 * @method $this withSeiParams($value)
 * @method string getTranscodeParams()
 * @method $this withTranscodeParams($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getMixMode()
 * @method $this withMixMode($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 */
class UpdateLiveMPUTask extends Rpc
{
}

/**
 * @method string getSegmentNum()
 * @method $this withSegmentNum($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getPartDuration()
 * @method $this withPartDuration($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getIgnoreTranscode()
 * @method $this withIgnoreTranscode($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSegmentDuration()
 * @method $this withSegmentDuration($value)
 */
class UpdateLivePackageConfig extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getPullAlways()
 * @method $this withPullAlways($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSourceUrl()
 * @method $this withSourceUrl($value)
 */
class UpdateLivePullStreamInfoConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getOnDemandUrl()
 * @method $this withOnDemandUrl($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getNeedStatusNotify()
 * @method $this withNeedStatusNotify($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveRecordNotifyConfig extends Rpc
{
}

/**
 * @method string getAutoCompose()
 * @method $this withAutoCompose($value)
 * @method string getComposeVodTranscodeGroupId()
 * @method $this withComposeVodTranscodeGroupId($value)
 * @method string getStorageLocation()
 * @method $this withStorageLocation($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getOnDemand()
 * @method $this withOnDemand($value)
 * @method string getStreamName()
 * @method $this withStreamName($value)
 * @method string getVodTranscodeGroupId()
 * @method $this withVodTranscodeGroupId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCycleDuration()
 * @method $this withCycleDuration($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateLiveRecordVodConfig extends Rpc
{
}

/**
 * @method string getOssEndpoint()
 * @method $this withOssEndpoint($value)
 * @method string getOssObject()
 * @method $this withOssObject($value)
 * @method array getScene()
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class UpdateLiveSnapshotDetectPornConfig extends Rpc
{

    /**
     * @param array $scene
     *
     * @return $this
     */
	public function withScene(array $scene)
	{
	    $this->data['Scene'] = $scene;
		foreach ($scene as $i => $iValue) {
			$this->options['query']['Scene.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNotifyReqAuth()
 * @method $this withNotifyReqAuth($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNotifyAuthKey()
 * @method $this withNotifyAuthKey($value)
 */
class UpdateLiveSnapshotNotifyConfig extends Rpc
{
}

/**
 * @method string getMonitorId()
 * @method $this withMonitorId($value)
 * @method string getMonitorConfig()
 * @method $this withMonitorConfig($value)
 * @method string getMonitorName()
 * @method $this withMonitorName($value)
 * @method string getStream()
 * @method $this withStream($value)
 * @method string getOutputTemplate()
 * @method $this withOutputTemplate($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getInputList()
 * @method $this withInputList($value)
 * @method string getDingTalkWebHookUrl()
 * @method $this withDingTalkWebHookUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 */
class UpdateLiveStreamMonitor extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getMix()
 * @method $this withMix($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getEncryptParameters()
 * @method $this withEncryptParameters($value)
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWaterPattern()
 * @method $this withWaterPattern($value)
 * @method string getOnlyAudio()
 * @method $this withOnlyAudio($value)
 */
class UpdateLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getYOffset()
 * @method $this withYOffset($value)
 * @method string getPictureUrl()
 * @method $this withPictureUrl($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getXOffset()
 * @method $this withXOffset($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getRefWidth()
 * @method $this withRefWidth($value)
 * @method string getTransparency()
 * @method $this withTransparency($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getOffsetCorner()
 * @method $this withOffsetCorner($value)
 * @method string getRefHeight()
 * @method $this withRefHeight($value)
 */
class UpdateLiveStreamWatermark extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class UpdateLiveStreamWatermarkRule extends Rpc
{
}

/**
 * @method string getExtension()
 * @method string getAppConfig()
 * @method string getAppName()
 * @method string getAppId()
 */
class UpdateMessageApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtension($value)
    {
        $this->data['Extension'] = $value;
        $this->options['form_params']['Extension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppConfig($value)
    {
        $this->data['AppConfig'] = $value;
        $this->options['form_params']['AppConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getExtension()
 * @method string getGroupId()
 * @method string getAppId()
 */
class UpdateMessageGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtension($value)
    {
        $this->data['Extension'] = $value;
        $this->options['form_params']['Extension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getMixStreamId()
 * @method $this withMixStreamId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getInputStreamList()
 * @method $this withInputStreamList($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateMixStream extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getChannelIds()
 * @method $this withChannelIds($value)
 */
class UpdateRtcMPUEventSub extends Rpc
{
}

/**
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getDeleteBframes()
 * @method $this withDeleteBframes($value)
 * @method string getLazy()
 * @method $this withLazy($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getOpus()
 * @method $this withOpus($value)
 * @method string getAudioCodec()
 * @method $this withAudioCodec($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioProfile()
 * @method $this withAudioProfile($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getAudioChannelNum()
 * @method $this withAudioChannelNum($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAudioRate()
 * @method $this withAudioRate($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 */
class UpdateRtsLiveStreamTranscode extends Rpc
{
}

/**
 * @method string getVerifyType()
 * @method $this withVerifyType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class VerifyLiveDomainOwner extends Rpc
{
}

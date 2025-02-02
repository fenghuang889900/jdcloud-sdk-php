<?php
/**
 * Cdn
 *
 * @category Jdcloud
 * @package  Jdcloud\Cdn
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Cdn;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with cdn.
 *
 * @method \Jdcloud\Result queryDomainsLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainsLogAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainLogAsync(array $args = [])
 * @method \Jdcloud\Result queryOnlineBillingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryOnlineBillingTypeAsync(array $args = [])
 * @method \Jdcloud\Result setOnlineBillingType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setOnlineBillingTypeAsync(array $args = [])
 * @method \Jdcloud\Result setAuthConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAuthConfigAsync(array $args = [])
 * @method \Jdcloud\Result setSourceAuthConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSourceAuthConfigAsync(array $args = [])
 * @method \Jdcloud\Result queryBand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBandAsync(array $args = [])
 * @method \Jdcloud\Result queryBandWithArea(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBandWithAreaAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainConfigStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainConfigStatusAsync(array $args = [])
 * @method \Jdcloud\Result queryAreaIspList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAreaIspListAsync(array $args = [])
 * @method \Jdcloud\Result queryAreaIspListV2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAreaIspListV2Async(array $args = [])
 * @method \Jdcloud\Result queryForbiddenInfoList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryForbiddenInfoListAsync(array $args = [])
 * @method \Jdcloud\Result createForbiddenInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createForbiddenInfoAsync(array $args = [])
 * @method \Jdcloud\Result deleteForbiddenInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteForbiddenInfoAsync(array $args = [])
 * @method \Jdcloud\Result queryUnForbiddenStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryUnForbiddenStatusAsync(array $args = [])
 * @method \Jdcloud\Result previewCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise previewCertificateAsync(array $args = [])
 * @method \Jdcloud\Result queryDefaultHttpHeaderKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDefaultHttpHeaderKeyAsync(array $args = [])
 * @method \Jdcloud\Result queryIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result setIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result operateIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result queryCustomErrorPage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCustomErrorPageAsync(array $args = [])
 * @method \Jdcloud\Result setCustomErrorPage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCustomErrorPageAsync(array $args = [])
 * @method \Jdcloud\Result createCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCacheRuleAsync(array $args = [])
 * @method \Jdcloud\Result updateCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCacheRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteCacheRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCacheRuleAsync(array $args = [])
 * @method \Jdcloud\Result setCacheRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCacheRulesAsync(array $args = [])
 * @method \Jdcloud\Result queryHttpHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryHttpHeaderAsync(array $args = [])
 * @method \Jdcloud\Result setHttpHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setHttpHeaderAsync(array $args = [])
 * @method \Jdcloud\Result deleteHttpHeader(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteHttpHeaderAsync(array $args = [])
 * @method \Jdcloud\Result setVideoDraft(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setVideoDraftAsync(array $args = [])
 * @method \Jdcloud\Result setRange(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRangeAsync(array $args = [])
 * @method \Jdcloud\Result setIgnoreQueryString(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setIgnoreQueryStringAsync(array $args = [])
 * @method \Jdcloud\Result setFilterArgs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setFilterArgsAsync(array $args = [])
 * @method \Jdcloud\Result queryFilterArgs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryFilterArgsAsync(array $args = [])
 * @method \Jdcloud\Result queryUserAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryUserAgentAsync(array $args = [])
 * @method \Jdcloud\Result setUserAgentConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setUserAgentConfigAsync(array $args = [])
 * @method \Jdcloud\Result queryAccesskeyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAccesskeyConfigAsync(array $args = [])
 * @method \Jdcloud\Result setAccesskeyConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAccesskeyConfigAsync(array $args = [])
 * @method \Jdcloud\Result setRefer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setReferAsync(array $args = [])
 * @method \Jdcloud\Result queryMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMonitorAsync(array $args = [])
 * @method \Jdcloud\Result setMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setMonitorAsync(array $args = [])
 * @method \Jdcloud\Result stopMonitor(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMonitorAsync(array $args = [])
 * @method \Jdcloud\Result setSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setSourceAsync(array $args = [])
 * @method \Jdcloud\Result operateShareCache(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateShareCacheAsync(array $args = [])
 * @method \Jdcloud\Result setHttpType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setHttpTypeAsync(array $args = [])
 * @method \Jdcloud\Result queryFollowRedirect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryFollowRedirectAsync(array $args = [])
 * @method \Jdcloud\Result setFollowRedirect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setFollowRedirectAsync(array $args = [])
 * @method \Jdcloud\Result queryFollowSourceProtocol(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryFollowSourceProtocolAsync(array $args = [])
 * @method \Jdcloud\Result setFollowSourceProtocol(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setFollowSourceProtocolAsync(array $args = [])
 * @method \Jdcloud\Result setDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setDomainConfigAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainAllConfigClassify(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainAllConfigClassifyAsync(array $args = [])
 * @method \Jdcloud\Result executeDomainCopy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise executeDomainCopyAsync(array $args = [])
 * @method \Jdcloud\Result queryExtraCacheTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryExtraCacheTimeAsync(array $args = [])
 * @method \Jdcloud\Result setExtraCacheTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setExtraCacheTimeAsync(array $args = [])
 * @method \Jdcloud\Result deleteExtraCacheTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteExtraCacheTimeAsync(array $args = [])
 * @method \Jdcloud\Result batchSetExtraCacheTime(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchSetExtraCacheTimeAsync(array $args = [])
 * @method \Jdcloud\Result setGzip(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setGzipAsync(array $args = [])
 * @method \Jdcloud\Result configBackSourceRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configBackSourceRuleAsync(array $args = [])
 * @method \Jdcloud\Result queryBackSourceRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBackSourceRuleAsync(array $args = [])
 * @method \Jdcloud\Result configUrlRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configUrlRuleAsync(array $args = [])
 * @method \Jdcloud\Result queryUrlRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryUrlRuleAsync(array $args = [])
 * @method \Jdcloud\Result configHttp2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configHttp2Async(array $args = [])
 * @method \Jdcloud\Result queryHttp2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryHttp2Async(array $args = [])
 * @method \Jdcloud\Result configBackSourcePath(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configBackSourcePathAsync(array $args = [])
 * @method \Jdcloud\Result queryBackSourcePath(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBackSourcePathAsync(array $args = [])
 * @method \Jdcloud\Result setAccelerateRegion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setAccelerateRegionAsync(array $args = [])
 * @method \Jdcloud\Result configBackSourceRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configBackSourceRulesAsync(array $args = [])
 * @method \Jdcloud\Result queryBackSourceRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBackSourceRulesAsync(array $args = [])
 * @method \Jdcloud\Result configBackSourceOss(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configBackSourceOssAsync(array $args = [])
 * @method \Jdcloud\Result queryBackSourceOss(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryBackSourceOssAsync(array $args = [])
 * @method \Jdcloud\Result speedLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise speedLimitAsync(array $args = [])
 * @method \Jdcloud\Result batchIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainGroupList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainGroupListAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainGroupDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainGroupDetailAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainsNotInGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainsNotInGroupAsync(array $args = [])
 * @method \Jdcloud\Result updateDomainGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainGroupAsync(array $args = [])
 * @method \Jdcloud\Result createDomainGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainGroupAsync(array $args = [])
 * @method \Jdcloud\Result batchDeleteDomainGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDeleteDomainGroupAsync(array $args = [])
 * @method \Jdcloud\Result getDomainList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainListAsync(array $args = [])
 * @method \Jdcloud\Result getDomainListByFilter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainListByFilterAsync(array $args = [])
 * @method \Jdcloud\Result getDomainDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainDetailAsync(array $args = [])
 * @method \Jdcloud\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Jdcloud\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Jdcloud\Result startDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDomainAsync(array $args = [])
 * @method \Jdcloud\Result stopDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryOssBuckets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryOssBucketsAsync(array $args = [])
 * @method \Jdcloud\Result batchCreate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainConfigAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainTempInstList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainTempInstListAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainTempProKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainTempProKeysAsync(array $args = [])
 * @method \Jdcloud\Result modifyDomainTempInst(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDomainTempInstAsync(array $args = [])
 * @method \Jdcloud\Result queryDomainTempInst(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDomainTempInstAsync(array $args = [])
 * @method \Jdcloud\Result delDomainTempInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise delDomainTempInstanceAsync(array $args = [])
 * @method \Jdcloud\Result checkWhetherIpBelongToJCloud(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkWhetherIpBelongToJCloudAsync(array $args = [])
 * @method \Jdcloud\Result queryServiceIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryServiceIpAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainBackSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainBackSourceAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainRefer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainReferAsync(array $args = [])
 * @method \Jdcloud\Result operateLiveDomainIpBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operateLiveDomainIpBlackListAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainBackSourceHost(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainBackSourceHostAsync(array $args = [])
 * @method \Jdcloud\Result setLiveDomainAccessKey(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLiveDomainAccessKeyAsync(array $args = [])
 * @method \Jdcloud\Result setProtocolConvert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setProtocolConvertAsync(array $args = [])
 * @method \Jdcloud\Result deleteForbiddenStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteForbiddenStreamAsync(array $args = [])
 * @method \Jdcloud\Result queryPushDomainORAppOrStream(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPushDomainORAppOrStreamAsync(array $args = [])
 * @method \Jdcloud\Result queryLiveDomainIpBlackWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLiveDomainIpBlackWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result batchCreateLiveDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchCreateLiveDomainAsync(array $args = [])
 * @method \Jdcloud\Result queryLiveDomainDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLiveDomainDetailAsync(array $args = [])
 * @method \Jdcloud\Result queryLiveDomainApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLiveDomainAppsAsync(array $args = [])
 * @method \Jdcloud\Result createLiveDomainPrefecthTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLiveDomainPrefecthTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryLivePrefetchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLivePrefetchTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryPinCanIPType(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPinCanIPTypeAsync(array $args = [])
 * @method \Jdcloud\Result batCreatePrefetchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batCreatePrefetchTaskAsync(array $args = [])
 * @method \Jdcloud\Result updatePrefetchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePrefetchTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryPrefetchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPrefetchTaskAsync(array $args = [])
 * @method \Jdcloud\Result stopPrefetchTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopPrefetchTaskAsync(array $args = [])
 * @method \Jdcloud\Result operatePurgeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise operatePurgeTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryPurgeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryPurgeTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryCdnUserQuota(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCdnUserQuotaAsync(array $args = [])
 * @method \Jdcloud\Result queryRefreshTaskByIds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRefreshTaskByIdsAsync(array $args = [])
 * @method \Jdcloud\Result setRefreshLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setRefreshLimitAsync(array $args = [])
 * @method \Jdcloud\Result queryRefreshLimit(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRefreshLimitAsync(array $args = [])
 * @method \Jdcloud\Result queryRefreshTaskById(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRefreshTaskByIdAsync(array $args = [])
 * @method \Jdcloud\Result createRefreshTaskForCallback(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRefreshTaskForCallbackAsync(array $args = [])
 * @method \Jdcloud\Result createRefreshTaskForCallbackV2(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRefreshTaskForCallbackV2Async(array $args = [])
 * @method \Jdcloud\Result queryRefreshTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryRefreshTaskAsync(array $args = [])
 * @method \Jdcloud\Result createRefreshTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRefreshTaskAsync(array $args = [])
 * @method \Jdcloud\Result queryNetProtectionRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryNetProtectionRulesAsync(array $args = [])
 * @method \Jdcloud\Result setNetProtectionRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setNetProtectionRulesAsync(array $args = [])
 * @method \Jdcloud\Result queryNetProtectionRulesSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryNetProtectionRulesSwitchAsync(array $args = [])
 * @method \Jdcloud\Result setNetProtectionRulesSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setNetProtectionRulesSwitchAsync(array $args = [])
 * @method \Jdcloud\Result queryGeoAreas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryGeoAreasAsync(array $args = [])
 * @method \Jdcloud\Result queryAttackTypeCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAttackTypeCountAsync(array $args = [])
 * @method \Jdcloud\Result queryDdosGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDdosGraphAsync(array $args = [])
 * @method \Jdcloud\Result searchAttackLog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAttackLogAsync(array $args = [])
 * @method \Jdcloud\Result getAllUpperNodeIpList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAllUpperNodeIpListAsync(array $args = [])
 * @method \Jdcloud\Result configServiceNotice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configServiceNoticeAsync(array $args = [])
 * @method \Jdcloud\Result queryServiceNotice(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryServiceNoticeAsync(array $args = [])
 * @method \Jdcloud\Result getSslCertList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSslCertListAsync(array $args = [])
 * @method \Jdcloud\Result getSslCertDetail(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSslCertDetailAsync(array $args = [])
 * @method \Jdcloud\Result uploadCert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise uploadCertAsync(array $args = [])
 * @method \Jdcloud\Result queryMixStatisticsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMixStatisticsDataAsync(array $args = [])
 * @method \Jdcloud\Result queryMixStatisticsWithAreaData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMixStatisticsWithAreaDataAsync(array $args = [])
 * @method \Jdcloud\Result queryMixTrafficGroupSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryMixTrafficGroupSumAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsDataGroupByArea(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataGroupByAreaAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsDataGroupSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsDataGroupSumAsync(array $args = [])
 * @method \Jdcloud\Result queryLiveStatisticsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLiveStatisticsDataAsync(array $args = [])
 * @method \Jdcloud\Result queryLiveStatisticsAreaDataGroupBy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLiveStatisticsAreaDataGroupByAsync(array $args = [])
 * @method \Jdcloud\Result queryLiveTrafficGroupSum(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryLiveTrafficGroupSumAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsTopIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsTopIpAsync(array $args = [])
 * @method \Jdcloud\Result queryStatisticsTopUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStatisticsTopUrlAsync(array $args = [])
 * @method \Jdcloud\Result queryDirBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDirBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result queryDirStatsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDirStatsDataAsync(array $args = [])
 * @method \Jdcloud\Result queryCustomizedDirBandWidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCustomizedDirBandWidthAsync(array $args = [])
 * @method \Jdcloud\Result queryStreamInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryStreamInfoAsync(array $args = [])
 * @method \Jdcloud\Result queryAvgBandwidthForPCdn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryAvgBandwidthForPCdnAsync(array $args = [])
 * @method \Jdcloud\Result queryDeviceStatusForPCdn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryDeviceStatusForPCdnAsync(array $args = [])
 * @method \Jdcloud\Result queryJDBoxStatisticsData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryJDBoxStatisticsDataAsync(array $args = [])
 * @method \Jdcloud\Result queryJDBoxStatisticsDataWithGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryJDBoxStatisticsDataWithGroupAsync(array $args = [])
 * @method \Jdcloud\Result queryJBoxAvgBandwidth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryJBoxAvgBandwidthAsync(array $args = [])
 * @method \Jdcloud\Result queryWafSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWafSwitchAsync(array $args = [])
 * @method \Jdcloud\Result setWafSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setWafSwitchAsync(array $args = [])
 * @method \Jdcloud\Result queryWafWhiteRuleSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWafWhiteRuleSwitchAsync(array $args = [])
 * @method \Jdcloud\Result setWafWhiteRuleSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setWafWhiteRuleSwitchAsync(array $args = [])
 * @method \Jdcloud\Result querywafWhiteRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querywafWhiteRulesAsync(array $args = [])
 * @method \Jdcloud\Result createWafWhiteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWafWhiteRuleAsync(array $args = [])
 * @method \Jdcloud\Result updateWafWhiteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWafWhiteRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableWafWhiteRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWafWhiteRulesAsync(array $args = [])
 * @method \Jdcloud\Result disableWafWhiteRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWafWhiteRulesAsync(array $args = [])
 * @method \Jdcloud\Result deleteWafWhiteRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWafWhiteRulesAsync(array $args = [])
 * @method \Jdcloud\Result queryWafBlackRuleSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWafBlackRuleSwitchAsync(array $args = [])
 * @method \Jdcloud\Result setWafBlackRuleSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setWafBlackRuleSwitchAsync(array $args = [])
 * @method \Jdcloud\Result querywafBlackRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise querywafBlackRulesAsync(array $args = [])
 * @method \Jdcloud\Result createWafBlackRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWafBlackRuleAsync(array $args = [])
 * @method \Jdcloud\Result updateWafBlackRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWafBlackRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableWafBlackRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWafBlackRulesAsync(array $args = [])
 * @method \Jdcloud\Result disableWafBlackRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWafBlackRulesAsync(array $args = [])
 * @method \Jdcloud\Result deleteWafBlackRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWafBlackRulesAsync(array $args = [])
 * @method \Jdcloud\Result queryCCProtectSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCCProtectSwitchAsync(array $args = [])
 * @method \Jdcloud\Result setCCProtectSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setCCProtectSwitchAsync(array $args = [])
 * @method \Jdcloud\Result queryCCProtectRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryCCProtectRulesAsync(array $args = [])
 * @method \Jdcloud\Result createCCProtectRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCCProtectRuleAsync(array $args = [])
 * @method \Jdcloud\Result updateCCProtectRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCCProtectRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableCCProtectRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableCCProtectRuleAsync(array $args = [])
 * @method \Jdcloud\Result disableCCProtectRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableCCProtectRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteCCProtectRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCCProtectRuleAsync(array $args = [])
 * @method \Jdcloud\Result queryWebProtectSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWebProtectSwitchAsync(array $args = [])
 * @method \Jdcloud\Result setWebProtectSwitch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setWebProtectSwitchAsync(array $args = [])
 * @method \Jdcloud\Result queryWebProtectSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWebProtectSettingsAsync(array $args = [])
 * @method \Jdcloud\Result updateWebProtectSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebProtectSettingsAsync(array $args = [])
 * @method \Jdcloud\Result queryWafRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryWafRegionsAsync(array $args = [])
 * @method \Jdcloud\Result queryIpBlackSettingStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise queryIpBlackSettingStatusAsync(array $args = [])
 * @method \Jdcloud\Result wafQueryPvForAreaAndIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise wafQueryPvForAreaAndIpAsync(array $args = [])
 * @method \Jdcloud\Result wafQueryPv(array $args = [])
 * @method \GuzzleHttp\Promise\Promise wafQueryPvAsync(array $args = [])
 * @method \Jdcloud\Result wafQueryAttackDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise wafQueryAttackDetailsAsync(array $args = [])
 */
class CdnClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'cdn',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'cdn'
            );
        };

        parent::__construct($args);
    }
}
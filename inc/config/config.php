<?php
$MAC = array (
  'db' => 
  array (
    'type' => 'mysql',
    'path' => '',
    'server' => '127.0.0.1',
    'port' => '3306',
    'name' => 'pingguocms',
    'user' => 'root',
    'pass' => 'root',
    'tablepre' => 'mac_',
  ),
  'site' => 
  array (
    'name' => '大壮电影_2017最新电影_免费电影在线观看_2017最新电视剧在线观看_2017电影排行榜',
    'installdir' => '/',
    'url' => 'hhh.cool',
    'keywords' => '大壮电影_2017最新电影_免费电影在线观看_2017最新电视剧在线观看_2017电影排行榜',
    'description' => '大壮电影提供最新的电视剧，最新电影,最新电视剧,最新电影资讯，电影排行榜2017最新电影，韩国电视剧、香港TVB电视剧、韩剧、日剧、美剧、综艺的在线观看和剧集交流场所，在线观看播放高清播放模式，每天第一时间更新，放送最新好看的高清免费电视剧。',
    'templatedir' => '08',
    'htmldir' => 'html',
    'adsdir' => 'ads',
    'icp' => 'icp123',
    'email' => '123456@maccms.com',
    'qq' => '123456',
    'tj' => '<script src="https://s22.cnzz.com/z_stat.php?id=1264569967&web_id=1264569967" language="JavaScript"></script>',
    'mobstatus' => '1',
    'mobtemplatedir' => '08',
    'mobhtmldir' => 'html',
  ),
  'app' => 
  array (
    'cachetype' => 0,
    'cache' => 0,
    'dynamiccache' => 0,
    'cachetime' => 60,
    'cacheid' => '',
    'memcachedhost' => '127.0.0.1',
    'memcachedport' => '11211',
    'safecode' => '7601788',
    'pagesize' => 18,
    'expandtype' => 0,
    'playersort' => 0,
    'area' => '大陆,香港,台湾,美国,韩国,日本,泰国,新加坡,马来西亚,印度,英国,法国,加拿大,西班牙,俄罗斯,其它',
    'lang' => '国语,英语,粤语,闽南语,韩语,日语,法语,德语,其它',
    'suffix' => 'html',
    'maketime' => '2',
    'makesize' => '20',
    'isopen' => 0,
    'encrypt' => 1,
    'compress' => 0,
    'searchtime' => 5,
  ),
  'view' => 
  array (
    'vodindex' => 0,
    'vodmap' => 0,
    'vodlist' => 0,
    'vodtype' => 0,
    'vodtopicindex' => 0,
    'vodtopic' => 0,
    'voddetail' => 0,
    'vodplay' => 0,
    'voddown' => 0,
    'vodsearch' => 0,
    'artindex' => 0,
    'artmap' => 0,
    'artlist' => 0,
    'arttype' => 0,
    'arttopicindex' => 0,
    'arttopic' => 0,
    'artdetail' => 0,
    'artsearch' => 0,
    'gbook' => 0,
    'rss' => 0,
    'label' => 2,
  ),
  'path' => 
  array (
    'vodindex' => 'index',
    'vodmap' => 'vodmap',
    'vodtype' => 'vodtypehtml/{id}',
    'vodtopicindex' => 'vodtopicindex',
    'vodtopic' => 'vodtopichtml/{id}',
    'voddetail' => 'vodhtml/{id}',
    'vodplay' => 'vodplayhtml/{id}',
    'voddown' => 'voddownhtml/{id}',
    'artindex' => 'artindex',
    'artmap' => 'artmap',
    'arttype' => 'arttypehtml/{id}',
    'arttopicindex' => 'arttopicindex',
    'arttopic' => 'arttopichtml/{id}',
    'artdetail' => 'arthtml/{id}',
  ),
  'rewrite' => 
  array (
    'vodindex' => 'index-pg-{pg}',
    'vodmap' => 'vod-map',
    'vodlist' => 'vod-list-id-{id}-pg-{pg}-order-{order}-by-{by}-class-{class}-year-{year}-letter-{letter}-area-{area}-lang-{lang}',
    'vodtype' => 'vod-type-id-{id}-pg-{pg}',
    'vodtopicindex' => 'vod-topicindex-pg-{pg}',
    'vodtopic' => 'vod-topic-id-{id}-pg-{pg}',
    'voddetail' => 'vod-detail-id-{id}',
    'vodplay' => 'vod-play-id-{id}-src-{src}-num-{num}',
    'voddown' => 'vod-down-id-{id}-src-{src}-num-{num}',
    'vodsearch' => 'vod-search-pg-{pg}-wd-{wd}',
    'artindex' => 'art-index-pg-{pg}',
    'artmap' => 'art-map',
    'artlist' => 'art-list-id-{id}-pg-{pg}-order-{order}-by-{by}',
    'arttype' => 'art-type-id-{id}-pg-{pg}',
    'arttopicindex' => 'art-topicindex-pg-{pg}',
    'arttopic' => 'art-topic-id-{id}-pg-{pg}',
    'artdetail' => 'art-detail-id-{id}-pg-{pg}',
    'artsearch' => 'art-search-pg-{pg}-wd-{wd}',
    'gbook' => 'gbook-show-pg-{pg}',
    'rss' => 'map-{method}-pg-{pg}',
    'label' => 'label-{label}-pg-{pg}',
  ),
  'user' => 
  array (
    'status' => 0,
    'reg' => 0,
    'regpoint' => 1,
    'regstate' => 0,
    'popularize' => 2,
    'popularizestate' => 0,
    'reggroup' => 1,
    'weekpoint' => 100,
    'monthpoint' => 1000,
    'yearpoint' => 5000,
  ),
  'other' => 
  array (
    'filter' => 'http,//,com,cn,net,org,www',
    'gbook' => 0,
    'gbooknum' => 10,
    'gbooktime' => 10,
    'gbookverify' => 0,
    'gbookaudit' => 0,
    'comment' => 1,
    'commentnum' => 10,
    'commenttime' => 10,
    'commentverify' => 1,
    'commentaudit' => 1,
    'mood' => 0,
  ),
  'upload' => 
  array (
    'thumb' => 0,
    'thumbw' => 110,
    'thumbh' => 150,
    'picpath' => 0,
    'watermark' => 0,
    'waterlocation' => 0,
    'waterfont' => 'maccms.com',
    'remote' => 0,
    'remoteurl' => 'http://license.maccms.com/',
    'ftp' => 0,
    'ftphost' => 'img.maccms.com',
    'ftpuser' => 'user',
    'ftppass' => 'pass',
    'ftpdir' => '/wwwroot/',
    'ftpport' => '21',
    'ftpdel' => 0,
    'filter' => '*.jpg;*.jpeg;*.gif;*.png;*.bmp;*.zip;*.rar;*.txt;*.torrent',
  ),
  'interface' => 
  array (
    'pass' => 'FO6CNW',
  ),
  'pay' => 
  array (
    'app' => 
    array (
      'min' => 10,
      'exc' => 1,
    ),
    'alipay' => 
    array (
      'no' => 'master@maccms.com',
      'id' => '888888',
      'key' => '000000',
    ),
    'ys' => 
    array (
      'id' => '201238303611',
      'key' => 'wxkhhbr8x9aew6c6',
    ),
  ),
  'collect' => 
  array (
    'vod' => 
    array (
      'key' => '111',
      'hitsstart' => 1,
      'hitsend' => 1000,
      'hide' => 0,
      'pic' => 0,
      'psernd' => 0,
      'psesyn' => 0,
      'inrule' => ',',
      'uprule' => ',a',
      'filter' => '色戒,色即是空',
      'tag' => 0,
      'score' => 0,
    ),
    'art' => 
    array (
      'key' => '222',
      'hitsstart' => 1,
      'hitsend' => 1000,
      'hide' => 0,
      'pic' => 0,
      'psernd' => 0,
      'psesyn' => 0,
      'inrule' => ',',
      'uprule' => ',a',
      'filter' => '无奈的人',
      'tag' => 1,
    ),
  ),
  'api' => 
  array (
    'vod' => 
    array (
      'status' => 1,
      'imgurl' => 'http://img.maccms.com/',
      'typefilter' => 'and t_hide=0',
      'vodfilter' => 'and d_hide=0',
      'pagesize' => 20,
      'cjflag' => '',
      'charge' => '0',
      'auth' => 'maccms.com#163.com',
    ),
    'art' => 
    array (
    ),
  ),
  'connect' => 
  array (
    'qq' => 
    array (
      'status' => 1,
      'id' => '11',
      'key' => '22',
    ),
    'uc' => 
    array (
      'status' => 0,
      'id' => '2',
      'key' => 'maccms',
      'url' => 'http://127.0.0.1/other/discuz/uc_server',
      'dbhost' => '127.0.0.1',
      'dbuser' => 'root',
      'dbpass' => '123456',
      'dbname' => 'discuz',
      'dbpre' => '`ultrax`.pre_ucenter_',
      'ip' => '',
    ),
  ),
  'weixin' => 
  array (
    'duijie' => 'wx.maccms.com',
    'sousuo' => 'wx.maccms.com',
    'token' => 'qweqwe',
    'guanzhu' => '欢迎关注',
    'wuziyuan' => '没找到资源，请更换关键词或等待更新',
    'wuziyuanlink' => 'demo.maccms.com',
    'bofang' => '1',
    'gjc1' => '关键词1',
    'gjcm1' => '长城',
    'gjci1' => 'http://img.aolusb.com/im/201610/2016101222371965996.jpg',
    'gjcl1' => 'http://www.loldytt.com/Dongzuodianying/CC/',
    'gjc2' => '关键词2',
    'gjcm2' => '生化危机6',
    'gjci2' => 'http://img.aolusb.com/im/201702/20172711214866248.jpg',
    'gjcl2' => 'http://www.loldytt.com/Kehuandianying/SHWJ6ZZ/',
    'gjc3' => '关键词3',
    'gjcm3' => '湄公河行动',
    'gjci3' => 'http://img.aolusb.com/im/201608/201681719561972362.jpg',
    'gjcl3' => 'http://www.loldytt.com/Dongzuodianying/GHXD/',
    'gjc4' => '关键词4',
    'gjcm4' => '王牌逗王牌',
    'gjci4' => 'http://img.aolusb.com/im/201601/201612723554344882.jpg',
    'gjcl4' => 'http://www.loldytt.com/Xijudianying/WPDWP/',
  ),
);
?>
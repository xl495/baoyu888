﻿var uid = MacPlayer.PlayUrl;
if(uid.indexOf('http') > -1){
	//url
	MacPlayer.Html = '<iframe width="100%" height="'+MacPlayer.Height+'" src="http://www.65yw.com/yks.php?url='+uid+'" frameborder="0" border="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>';
	MacPlayer.Show();
}else{
	//id
	MacPlayer.Html = '<iframe width="100%" height="'+MacPlayer.Height+'" src="http://www.65yw.com/yks.php?url='+uid+'" frameborder="0" border="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>';
	MacPlayer.Show();
}
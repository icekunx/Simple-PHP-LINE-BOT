<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "/8Pe9eOiufKAxKmRMP8F58ICkey/fmLQw8amhZDJyvEczaB/SB1fCTqtzNujMKGAu/h3zfe9V71dkE1igYpNTyzyEs+QzIobL2PhfJUvLNQzs3DCd7nfGXe9pnHvuv610/9hIUNOed6s4FHsZ60/TQdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "4bd03ce60725e8257b1eff34721b8602";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}

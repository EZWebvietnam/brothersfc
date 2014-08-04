<?php
include_once("facebooksdk/facebook.php");
class messagefb
{
	public function post_message($id_login,$message,$link,$access_token)
	{
		
		$facebook = new Facebook(array(
		  'appId'  => APP_ID,
		  'secret' => FB_SR,
		  'scope' => 'user_groups,manage_pages,publish_actions,publish_stream'
		));
		$facebook->setAccessToken($access_token);
		
		/*
		$groups = $facebook->api('me/groups');
		$id = '216190778579114';
		$api = $facebook->api($id. '/feed', 'POST', array(
				'access_token'=>$access_token,
				'picture' => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10325561_1445071755745876_3058295760812569024_n.jpg',
				'link' => $link,
				'message' => $message,
				'caption' => "Test login"
		));
			*/
			//posting to pages
			/*
			$pages = $facebook->api('me/accounts');
			$id = '683122905088156';
			$token = $pages['data']['0']['access_token'];
			$api = $facebook->api($id . '/feed', 'POST', array(
				'access_token' => $token,
				'link' => 'cyberfreax.com',
				'message' => 'Check This Out !'
			));
			*/
			
			//posting to profile
			/*
			$api = $facebook->api('me/feed', 'POST', array(
				'access_token'=>$access_token,
				'link' => $link,
				'picture' => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10325561_1445071755745876_3058295760812569024_n.jpg',
				'message' => $message,
				'caption' => "Test login"
				
			));*/
			/*$facebook->api("/$id_login/feed", 'post', array(
		    'access_token' => $facebook->getAccessToken(),
		    'message' => "Hello win95",
		    'picture' => "http://cdn.papyimg.com/wp-content/uploads/2011/03/Windows-95-500x312.png",
		    'link' => "http://en.wikipedia.org/wiki/Windows_95",
		    'name' => "Go windows 95",
		    'caption' => "Caption - this is the best operating system in the world!"
		));*/
		$post =  array(
			    'access_token' => $access_token,
			    'message' => 'This message is posted with access token - ' . date('Y-m-d H:i:s')
			);

			//and make the request
			$res = $facebook->api('/me/feed', 'POST', $post);

			//For example this can also be used to gain user data
			//and this time only token is needed
			$token =  array(
			    'access_token' => $access_token
			);
			$userdata = $facebook->api('/me', 'GET', $token);
			//displaying logout link
			//echo "<br><a href = 'logout.php'>Logout</a>";
			
		}
		public function push_fanpage($message,$picture,$link,$access_token)
	{
		
		$facebook = new Facebook(array(
		  'appId'  => '582070805242886',
		  'secret' => '15f3c95fdb379caffd7d01a68857657a',
		  'scope' => 'user_groups,manage_pages,publish_actions,publish_stream'
		));
		$facebook->setAccessToken($access_token);
		
		/*
		$groups = $facebook->api('me/groups');
		$id = '216190778579114';
		$api = $facebook->api($id. '/feed', 'POST', array(
				'access_token'=>$access_token,
				'picture' => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10325561_1445071755745876_3058295760812569024_n.jpg',
				'link' => $link,
				'message' => $message,
				'caption' => "Test login"
		));
			*/
			//posting to pages
			$pages = $facebook->api('me/accounts');
			$id = '683122905088156';
			$token = $pages['data']['0']['access_token'];
			$api = $facebook->api($id . '/feed', 'POST', array(
				'access_token' => $token,
				'link' => $link,
				'message' => $message,
				'picture' => $picture
			));
			//posting to profile
			/*
			$api = $facebook->api('me/feed', 'POST', array(
				'access_token'=>$access_token,
				'link' => $link,
				'picture' => 'https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10325561_1445071755745876_3058295760812569024_n.jpg',
				'message' => $message,
				'caption' => "Test login"
				
			));*/
			
		}
	
}
?>
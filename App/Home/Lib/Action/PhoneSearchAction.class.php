<?php
	 * 所有action默认调用的方法
	 */
	function _initialize(){
		// 获取当前客户端ip
		$ip = get_client_ip();
		$this->assign("ip",$ip);
	}
	/*
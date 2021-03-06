@include('default.top')

<div class="am-g am-g-fixed main-div-top">
	<div class="main-page-shadow main-page-1">
		<div class="main-page-shadow main-page-2">
			<div class="main-page-shadow main-page-3">
				<div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
				    <div>
				    	<p class="main-p-big">neu编年史</p>
				    	<p class="main-p-small">&nbsp;&nbsp;————编写属于我们的编年史</p>
				    </div>
					<img src="{{ asset('lib/app/images/huiyi.jpg') }}" class="main-jpg main-page-shadow">
				</div>
				<div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
					<div class="main-div-fix">
						<p class="main-p-medium">每一段记忆，都有一个密码。只要时间，地点，人物组合正确，无论尘封多久，那人那景都将在遗忘中重新拾起。从这里开始，记录你和他们的故事</p>
						<div>
							<button class="am-btn am-btn-default am-btn-lg main-button main-button-left">注册</button>
							<button class="am-btn am-btn-default am-btn-lg main-button main-button-right">登录</button>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('div.main-page-3').bind('mouseover',function(){
            $(this).css('border-bottom-right-radius','140px 30px');
            $(this).parent().css('border-bottom-right-radius','120px 20px');
		}).bind('mouseleave',function(){
			$(this).css('border-bottom-right-radius','0px');
			$(this).parent().css('border-bottom-right-radius','0px');
		});
		$('footer.am-footer').removeClass('am-topbar-fixed-bottom');
	});
</script>
@include('default.foot')
@include('default.bottom')
<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>限时免费_起点中文网</title>
    <meta name="description" content="最热门的免费小说网,提供人气玄幻小说,奇幻小说,武侠小说,仙侠小说,都市小说,历史小说,军事小说,竞技小说,灵异小说,二次元小说,免费小说在线阅读与下载.大神作品齐聚起点,最新章节每日更新">
    <meta name="keywords" content="免费小说,免费网络小说,免费玄幻小说,免费奇幻小说,免费武侠小说,免费仙侠小说,免费都市小说,免费历史小说,免费军事小说,免费竞技小说,免费灵异小说,免费二次元小说">
    <meta name="robots" content="all">
    <meta name="googlebot" content="all">
    <meta name="baiduspider" content="all">
    <meta http-equiv="mobile-agent" content="format=wml; url=http://m.qidian.com">
    <meta http-equiv="mobile-agent" content="format=xhtml; url=http://m.qidian.com">
    <meta http-equiv="mobile-agent" content="format=html5; url=http://h5.qidian.com/bookstore.html">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">

    <script>
        document.domain = 'qidian.com';
    </script>
    <!-- start speedTimer[var, zero] -->
    <script>
        var speedTimer = [],
            speedZero = new Date().getTime();
    </script>
    <!-- end speedTimer[var, zero] -->
    <!-- start 通用头逻辑 -->
    <script>
        //遇到cookie tf=1的话留在本站，否则跳转移动站
        if (getCookie('tf') != 1) {
            //判断是以下设备后跳转到m站
            if (navigator.userAgent.match(/(iPhone|iPod|Android)/i)) {
                location.href = "//m.qidian.com"
            }
        }else {
            // M站设置了一年，这里fixed
            setCookie('tf', 1, 'qidian.com', '/', 0);
        }

        // start 防劫持
        //设置cookie
        function setCookie(name, value, domain, path, expires) {
            if(expires){
                expires = new Date(+new Date() + expires);
            }
            var tempcookie = name + '=' + escape(value) +
                ((expires) ? '; expires=' + expires.toGMTString() : '') +
                ((path) ? '; path=' + path : '') +
                ((domain) ? '; domain=' + domain : '');

            //Ensure the cookie's size is under the limitation
            if(tempcookie.length < 4096) {
                document.cookie = tempcookie;
            }
        }

        //获取cookie
        function getCookie(name) {
            var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");

            if (arr = document.cookie.match(reg))

                return (arr[2]);
            else
                return null;
        }

        //创建并发送请求
        function createSender(url){
            var img = new Image();
            img.onload = img.onerror = function(){
                img = null;
            };
            img.src = url;
        };

        (function(){
            /*
             *防劫持逻辑所需参数在此处设置参数即可
             *cookieName:用于记录连续被劫持的次数，为防止死循环，cookie值为3以上则不进行url重置
             *cookieDomain:cookie所在的域
             *reportUrl:非连续性劫持时上报的接口地址【如无需上报，可不填】
             *reportUrl2：连续性劫持时上报的接口地址【如无需上报，可不填】
             */
            var cookieName = 'hiijack';
            var cookieDomain = '.qidian.com';
            var reportUrl = '//book.qidian.com/ajax/safe/hiijackReport?times=1&_csrfToken='+ getCookie('_csrfToken')||'';
            var reportUrl2 = '//book.qidian.com/ajax/safe/hiijackReport?times=3&_csrfToken='+ getCookie('_csrfToken')||'';

            //判断是否被iframe
            if (top.location.href !== self.location.href) {
                //用于记录被劫持的次数
                var countHijack;

                //如果未设置cookie，则需要set一下cookie，否则获取此cookie的值
                if(!getCookie(cookieName)){
                    setCookie(cookieName,0 ,cookieDomain, '', 30*24*60*60*1000);
                    countHijack = 0;
                }else{
                    countHijack = parseInt(getCookie(cookieName));
                }

                //如果连续被劫持的次数大于等于3次，则发请求上报此情况,否则上报非连续性的情况,同时累加被劫持次数、重置当前url
                if(countHijack >= 3){
                    reportUrl2 && reportUrl2!='' && createSender(reportUrl2);
                }else{
                    reportUrl && reportUrl!=''&& createSender(reportUrl);
                    countHijack ++;
                    setCookie(cookieName, countHijack ,cookieDomain, '', 30*24*60*60*1000);
                    top.location = self.location.href;
                }
            }
            //每次成功进入页面则计数清0
            setCookie(cookieName, 0 ,cookieDomain, '', 30*24*60*60*1000);
        })();
        //end 防劫持
    </script>


    <link data-ignore="true" rel="shortcut icon" type="image/x-icon" href="http://qidian.gtimg.com/qd/favicon/qd_icon.0.2.ico">
    <link data-ignore="true" rel="Bookmark" type="image/x-icon" href="http://qidian.gtimg.com/qd/favicon/qd_icon.0.2.ico">


    <!-- end 通用头逻辑 -->

    <link rel="stylesheet" data-ignore="true" href="css/nomoney/footer.css">













    <link href="css/nomoney/LightTip.css" rel="stylesheet" charset="utf-8"><link href="css/nomoney/Autocomplete.css" rel="stylesheet" charset="utf-8"><link href="css/nomoney/Popup.css" rel="stylesheet" charset="utf-8"><style name="lbf-overlay">.lbf-overlay { position:fixed; top:0; left:0;}</style></head>
<body>
<!-- start 通用body层 -->
<!-- start 微信分享小图标 -->
<div class="share-img">
    <img src="%E5%85%8D%E8%B4%B9_files/share.png" height="300" width="300">
</div>
<!-- end 微信分享小图标 -->
<!-- end 通用body层 -->

<div class="wrap">
    <!-- start 顶部导航 -->
    <div class="top-nav" data-l1="1">
        <div class="box-center cf">
            <div class="login-box fr">
                <div class="sign-in hidden">
                    <span>你好，</span><a class="black" id="user-name" href="http://me.qidian.com/" target="_blank" data-eid="qd_A08"></a><em>|</em><a class="black" id="msg-btn" href="http://me.qidian.com/msg/systems.aspx?page=1" target="_blank" data-eid="qd_A09">消息<cite id="msg-box">(<i></i>)</cite></a><em>|</em><a id="exit-btn" href="javascript:" data-eid="qd_A10">退出</a>
                </div>
                <div class="sign-out">
                    <a id="login-btn" class="black" href="?r=login/login" data-eid="qd_A06">登录</a><em>|</em><a id="reg-btn" href="?r=resgin/newresgin" target="_blank" data-eid="qd_A07">注册</a>
                </div>
            </div>
            <div class="nav-link fl">
                <a class="act" href="" data-eid="qd_A01">起点中文网</a>

                <!--<em>|</em>
                <a class="black" id="back-old" href="javascript:" data-eid="qd_A05">返回旧版</a>-->
            </div>
        </div>
    </div>
    <!-- end 顶部导航 -->
    <!-- start logo & 搜索 -->
    <div class="logo-wrap box-center" data-l1="2">
        <div class="box-center cf">
            <div class="book-shelf fr">
                <a href="?r=user/user" target="_blank" data-eid="qd_A14"><em class="iconfont shelf"></em><i>我的书架</i>
                </a>
            </div>
            <div class="logo fl">
                <a href="http://www.qidian.com/" data-eid="qd_A11"></a>
            </div>
            <div class="search-wrap fl">
                <form id="formUrl" action="//se.qidian.com" method="get" target="_blank">
                    <p><input autocomplete="off" class="search-box" id="s-box" name="kw" placeholder="无疆" type="text"></p>
                    <input class="submit-input" id="searchSubmit" data-eid="qd_A13" type="submit">
                    <label id="search-btn" class="search-btn" for="searchSubmit"><em class="iconfont" data-eid="qd_A13">
                            </em></label>
                </form>
            </div>
        </div>
    </div>
    <!-- end logo & 搜索 -->

    <!-- start 主导航 -->

    <!-- 判断navHighLight值，分别在导航中高亮 -->

    <div class="main-nav-wrap" data-l1="3">
        <div class="main-nav box-center cf" id="type-hover">
            <!-- Component Start 作品分类导航 模块 -->
            <!-- start 作品分类导航-->
            <div class="classify-list fl so-awesome" id="classify-list" data-l1="3">
                <dl>
                    <dd>
                        <a href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_A71">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>玄幻</i>
                                        <b>568498</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://qihuan.qidian.com/" target="_blank" data-eid="qd_A72">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>奇幻
                                        </i>
                                        <b>119140</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd class="even">
                        <a href="http://wuxia.qidian.com/" target="_blank" data-eid="qd_A73">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>武侠</i>
                                        <b>32213</b>
                                    </span>
                            </cite>
                        </a>

                    </dd>
                    <dd class="even">
                        <a href="http://xianxia.qidian.com/" target="_blank" data-eid="qd_A74">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>仙侠</i>
                                        <b>199058</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_A75">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>都市</i>
                                        <b>311962</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://zhichang.qidian.com/" target="_blank" data-eid="qd_A76">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>职场</i>
                                        <b>20746</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd class="even">
                        <a href="http://junshi.qidian.com/" target="_blank" data-eid="qd_A77">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>军事</i>
                                        <b>17647</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd class="even">
                        <a href="http://lishi.qidian.com/" target="_blank" data-eid="qd_A78">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>历史</i>
                                        <b>65025</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://youxi.qidian.com/" target="_blank" data-eid="qd_A79">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>游戏</i>
                                        <b>88760</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://tiyu.qidian.com/" target="_blank" data-eid="qd_A80">
                            <cite>
                                <em class="iconfont tiyu"></em>
                                    <span class="info">
                                        <i>体育</i>
                                        <b>8798</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd class="even">
                        <a href="http://kehuan.qidian.com/" target="_blank" data-eid="qd_A81">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>科幻</i>
                                        <b>116619</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd class="even">
                        <a href="http://lingyi.qidian.com/" target="_blank" data-eid="qd_A82">
                            <cite>
                                <em class="iconfont lingyi"></em>
                                    <span class="info">
                                        <i>灵异</i>
                                        <b>46961</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://www.qdmm.com/" target="_blank" data-eid="qd_A83">
                            <cite>
                                <em class="iconfont"></em>
                                    <span class="info">
                                        <i>女生网</i>
                                        <b>587048</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="http://2cy.qidian.com/" target="_blank" data-eid="qd_A84">
                            <cite>
                                <em class="iconfont erciyuan"></em>
                                    <span class="info">
                                        <i>二次元</i>
                                        <b>75681</b>
                                    </span>
                            </cite>
                        </a>
                    </dd>
                </dl>
            </div>
            <!-- end 作品分类导航-->

            <!-- Component End 作品分类导航 模块 -->
            <ul>
                <li class="first"><b><strong></strong></b><span><em>
                            <i></i>
                            <i></i>
                            <i></i>
                        </em>作品分类</span>
                </li>
                <li class="nav-li">
                    <a data-eid="qd_A15" href="?r=whole/whole">全部作品</a>
                </li>
                <li class="nav-li">
                    <a data-eid="qd_A16" href="?r=ranking/ranking">排行</a>
                </li>
                <li class="nav-li">
                    <a data-eid="qd_A17" href="?r=theend/theend">完本</a>
                </li>
                <li class="nav-li">
                    <a data-eid="qd_A18" href="?r=nomoney/nomoney">免费</a>
                </li>
                <li class="nav-li">
                    <a data-eid="qd_A19" target="_blank" href="?r=auther/auther">作家专区</a>
                </li>
                <li class="nav-li"><a href="?r=index/index" target="_blank" data-eid="qd_A20">首页</a>
                </li>
                <!-- start 页游手游 -->
                <li class="game phone" id="game-phone">

                    <!-- start 手游下拉框 -->
                    <div class="game-dropdown hidden" id="phone-dropdown">
                        <cite></cite>
                        <dl class="phone-list">

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A39" target="_blank">灵魂撕裂</a><i>经典格斗</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vSG9tZS9QYy9JbmRleC9kZXRhaWwvZ2FtZWlkLzIwMDU0Mg==&amp;code=5733ed85f2cd0" target="_blank" data-eid="qd_A39"><img src="%E5%85%8D%E8%B4%B9_files/0_004.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A40" target="_blank">天命传说</a><i>策略RPG</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vSG9tZS9QYy9JbmRleC9kZXRhaWwvZ2FtZWlkLzIwMDUxNQ==&amp;code=5733edc4a3435" target="_blank" data-eid="qd_A40"><img src="%E5%85%8D%E8%B4%B9_files/0_008.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A41" target="_blank">我是大将军</a><i>策略RPG</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vYXBpL3N5eHMvc2dhbWUvUGxheS5waHA/Z2FtZWlkPTIwMDUxMiZzZXJ2ZXJpZD0xJnR5PTE=&amp;code=5769f94031529" target="_blank" data-eid="qd_A41"><img src="%E5%85%8D%E8%B4%B9_files/0_007.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                        </dl>
                        <div class="bottom">
                            <h4>新游上线|妖怪宝可萌</h4>
                            <p><a href="http://sy.qidian.com/api/syxs/sgame/Play.php?gameid=200549&amp;serverid=1&amp;ty=1&amp;qd_game_key=192x86&amp;qd_dd_p1=141" data-eid="qd_A42" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0_003.jpg" alt=""><i class="op-tag"></i></a></p>
                        </div>
                    </div>
                    <!-- end 手游下拉框 -->
                </li>
                <li class="game web" id="game-web">

                    <!-- start 页游下拉框 -->
                    <div class="game-dropdown hidden" id="web-dropdown">
                        <cite></cite>
                        <!-- start 页游列表 -->
                        <div class="web-game-list">
                            <!-- start 最近玩过 -->
                            <dl class="lately" id="lately">
                                <dt>最近玩过</dt>
                                <dd><a class="name" href="javascript:" target="_blank" data-eid="qd_A29"></a><strong></strong><a class="link" href="javascript:" target="_blank" data-eid="qd_A29">GO<i>&gt;</i></a></dd>
                                <dd><a class="name" href="javascript:" target="_blank" data-eid="qd_A30"></a><strong></strong><a class="link" href="javascript:" target="_blank" data-eid="qd_A30">GO<i>&gt;</i></a></dd>
                            </dl>
                            <!-- end 最近玩过 -->
                            <dl class="web-list" id="log-web-list">
                                <dt>今日开服</dt>
                                <dd class="act">
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/wldf" data-eid="qd_A31" target="_blank">武炼巅峰</a><strong>22区</strong></h3>
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/wldf" data-eid="qd_A31" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/dyjd" data-eid="qd_A32" target="_blank">第一舰队</a><strong>11区</strong></h3>
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/dyjd" data-eid="qd_A32" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0_006.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=dtss" data-eid="qd_A33" target="_blank">大唐盛世</a><strong>14区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=dtss" data-eid="qd_A33" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0_005.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=qyz" data-eid="qd_A34" target="_blank">青云志</a><strong>31区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=qyz" data-eid="qd_A34" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0_002.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/lscq" data-eid="qd_A35" target="_blank">梁山传奇</a><strong>4区</strong></h3>
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/lscq" data-eid="qd_A35" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0_011.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=zjzr" data-eid="qd_A36" target="_blank">最佳阵容</a><strong>12区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=zjzr" data-eid="qd_A36" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0_010.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=jyyx" data-eid="qd_A37" target="_blank">锦衣夜行</a><strong>27区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=jyyx" data-eid="qd_A37" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0_009.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                            </dl>
                            <div class="bottom">
                                <h4>悬赏</h4>
                                <p><a href="http://xs.game.qidian.com/?qd_game_key=xs192x86&amp;qd_dd_p1=124" data-eid="qd_A38" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/0.gif"><span class="op-tag"></span></a></p>
                            </div>
                        </div>
                        <!-- end 页游列表 -->
                    </div>
                    <!-- end 页游下拉框 -->
                </li>
                <!-- end 页游手游 -->
            </ul>
        </div>
    </div>
    <!-- end 主导航 -->

    <!-- start 免费频道容器 -->
    <div class="free-container box-center">
        <!-- start 免费种类切换 -->
        <div class="free-type-tab mb30 cf" id="free-type-tab" data-l1="4">
            <em></em>
            <ul>
                <li class="lang act" type="1">限时免费</li>
                <li class="lang" data-eid="qd_E01" type="2">免费作品</li>
            </ul>
        </div>
        <!-- end 免费种类切换 -->
        <!-- start 免费内容区 -->
        <div id="free-channel-wrap">
            <!-- start 限时免费 -->
            <div id="limit-channel">
                <!-- start 倒计时 -->
                <div class="count-down" id="time-box" data-endtime="154410000">
                    <div class="digital">

                        <span class="day">1</span>
                        <span class="hour">18</span>
                        <span class="minute">53</span>
                        <span class="second">26</span>
                    </div>
                </div>
                <!-- end 倒计时 -->
                <div class="limit-free-list cf">
                    <!-- start 左侧限时免费列表 -->
                    <div class="limit-book-list fl" data-l1="5">
                        <!-- start 暂无数据的情况 -->

                        <!-- end 暂无数据的情况 -->

                        <!-- start 限免书数据列表-->
                        <div id="limit-list">
                            <div class="book-img-text">
                                <ul>

                                    <li data-rid="1">
                                        <div class="book-img-box">
                                            <div class="score">7.5</div>
                                            <a href="http://www.qidian.com/Book/1003661659.aspx" data-eid="qd_E04" data-bid="1003661659" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/150_006.jpg"></a>
                                        </div>
                                        <div class="book-mid-info">
                                            <h4><a href="http://www.qidian.com/Book/1003661659.aspx" target="_blank" data-eid="qd_E05" data-bid="1003661659">海贼之最强附身</a></h4>
                                            <p class="author">
                                                <img src="%E5%85%8D%E8%B4%B9_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=7680172" target="_blank" data-eid="qd_E06">无敌青衣</a><em>|</em><a href="http://2cy.qidian.com/" data-eid="qd_E07" target="_blank">二次元</a><em>|</em><span>连载中</span>
                                            </p>
                                            <p class="intro">

                                                穿越海贼世界，居然成为了罗杰的弟弟。无法想象五十多岁的罗杰，居然还会有一个十几岁的弟弟。但是哥哥成为海贼王，弟弟却毫无才能。好在十六岁的时候，他
                                                居然发现自己身上带着一个附身系统。附
                                            </p>
                                            <p class="update"><a href="http://vipreader.qidian.com/chapter/1003661659/369967226" data-eid="qd_E08" data-bid="1003661659" data-cid="//vipreader.qidian.com/chapter/1003661659/369967226" target="_blank">最新更新  第三百八十八章 神</a><em>
                                                    ·</em><span>昨日23:29更新</span>
                                            </p>
                                        </div>
                                        <div class="book-right-info">
                                            <div class="price">
                                                <p><span>¥</span>0</p>
                                                <s>¥25</s>
                                            </div>
                                            <p class="btn">
                                                <a class="red-btn" href="http://www.qidian.com/Book/1003661659.aspx" target="_blank" data-eid="qd_E02">免费阅读</a>

                                                <a class="blue-btn add-book" href="javascript:" data-eid="qd_E03" data-bookid="1003661659" data-bid="1003661659">加入书架</a>
                                            </p>
                                        </div>
                                    </li>

                                    <li data-rid="2">
                                        <div class="book-img-box">
                                            <div class="score">8.4</div>
                                            <a href="http://www.qidian.com/Book/3469854.aspx" data-eid="qd_E04" data-bid="3469854" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/150_005.jpg"></a>
                                        </div>
                                        <div class="book-mid-info">
                                            <h4><a href="http://www.qidian.com/Book/3469854.aspx" target="_blank" data-eid="qd_E05" data-bid="3469854">重生之小玩家</a></h4>
                                            <p class="author">
                                                <img src="%E5%85%8D%E8%B4%B9_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4436593" target="_blank" data-eid="qd_E06">吹个大气球9</a><em>|</em><a href="http://dushi.qidian.com/" data-eid="qd_E07" target="_blank">都市</a><em>|</em><span>连载中</span>
                                            </p>
                                            <p class="intro">

                                                世事如棋，有人身在局中当棋子，有人手握棋子做玩家。大玩家摆弄苍生，小玩家自得富贵。秦风活过一世再重来，睁开眼，便要从棋子变玩家。然则大玩家不好
                                                当，姑且，就做个小玩家，富贵一生吧。
                                            </p>
                                            <p class="update"><a href="http://vipreader.qidian.com/chapter/3469854/370022239" data-eid="qd_E08" data-bid="3469854" data-cid="//vipreader.qidian.com/chapter/3469854/370022239" target="_blank">最新更新  第七百十三章</a><em>
                                                    ·</em><span>今天16:23更新</span>
                                            </p>
                                        </div>
                                        <div class="book-right-info">
                                            <div class="price">
                                                <p><span>¥</span>0</p>
                                                <s>¥81</s>
                                            </div>
                                            <p class="btn">
                                                <a class="red-btn" href="http://www.qidian.com/Book/3469854.aspx" target="_blank" data-eid="qd_E02">免费阅读</a>

                                                <a class="blue-btn add-book" href="javascript:" data-eid="qd_E03" data-bookid="3469854" data-bid="3469854">加入书架</a>
                                            </p>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="book-img-box">
                                            <div class="score">8.6</div>
                                            <a href="http://www.qidian.com/Book/2889200.aspx" data-eid="qd_E04" data-bid="2889200" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/150.jpg"></a>
                                        </div>
                                        <div class="book-mid-info">
                                            <h4><a href="http://www.qidian.com/Book/2889200.aspx" target="_blank" data-eid="qd_E05" data-bid="2889200">穿越1630之崛起南美</a></h4>
                                            <p class="author">
                                                <img src="%E5%85%8D%E8%B4%B9_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=3466815" target="_blank" data-eid="qd_E06">孤独麦客</a><em>|</em><a href="http://lishi.qidian.com/" data-eid="qd_E07" target="_blank">历史</a><em>|</em><span>连载中</span>
                                            </p>
                                            <p class="intro">
                                                辽阔的潘帕斯草原、富饶的巴西、群雄角力的加勒比海……21世纪500人意外穿越南美，一切从生存开始。
                                            </p>
                                            <p class="update"><a href="http://vipreader.qidian.com/chapter/2889200/369943723" data-eid="qd_E08" data-bid="2889200" data-cid="//vipreader.qidian.com/chapter/2889200/369943723" target="_blank">最新更新  第五百十章 撤退（二）</a><em>
                                                    ·</em><span>昨日19:30更新</span>
                                            </p>
                                        </div>
                                        <div class="book-right-info">
                                            <div class="price">
                                                <p><span>¥</span>0</p>
                                                <s>¥265</s>
                                            </div>
                                            <p class="btn">
                                                <a class="red-btn" href="http://www.qidian.com/Book/2889200.aspx" target="_blank" data-eid="qd_E02">免费阅读</a>

                                                <a class="blue-btn add-book" href="javascript:" data-eid="qd_E03" data-bookid="2889200" data-bid="2889200">加入书架</a>
                                            </p>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="book-img-box">
                                            <div class="score">8.5</div>
                                            <a href="http://www.qidian.com/Book/3347589.aspx" data-eid="qd_E04" data-bid="3347589" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/150_004.jpg"></a>
                                        </div>
                                        <div class="book-mid-info">
                                            <h4><a href="http://www.qidian.com/Book/3347589.aspx" target="_blank" data-eid="qd_E05" data-bid="3347589">九阳帝尊</a></h4>
                                            <p class="author">
                                                <img src="%E5%85%8D%E8%B4%B9_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4224831" target="_blank" data-eid="qd_E06">剑棕</a><em>|</em><a href="http://xuanhuan.qidian.com/" data-eid="qd_E07" target="_blank">玄幻</a><em>|</em><span>连载中</span>
                                            </p>
                                            <p class="intro">

                                                一场奇遇，一头比山岳还要大的金翅大鹏，成了少年楚晨的分身，从此他获得了进入神墓的资格，神墓中有仙女冰封在玉棺之中，有上古仙器灭天辟魔神梭……无数
                                                的丹药法宝，神符圣兵，全部由他随意拾
                                            </p>
                                            <p class="update"><a href="http://vipreader.qidian.com/chapter/3347589/369076364" data-eid="qd_E08" data-bid="3347589" data-cid="//vipreader.qidian.com/chapter/3347589/369076364" target="_blank">最新更新  第一千五百九十八章 永不回头</a><em>
                                                    ·</em><span>昨日07:00更新</span>
                                            </p>
                                        </div>
                                        <div class="book-right-info">
                                            <div class="price">
                                                <p><span>¥</span>0</p>
                                                <s>¥160</s>
                                            </div>
                                            <p class="btn">
                                                <a class="red-btn" href="http://www.qidian.com/Book/3347589.aspx" target="_blank" data-eid="qd_E02">免费阅读</a>

                                                <a class="blue-btn add-book" href="javascript:" data-eid="qd_E03" data-bookid="3347589" data-bid="3347589">加入书架</a>
                                            </p>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="book-img-box">
                                            <div class="score">8</div>
                                            <a href="http://www.qidian.com/Book/1005204004.aspx" data-eid="qd_E04" data-bid="1005204004" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/150_007.jpg"></a>
                                        </div>
                                        <div class="book-mid-info">
                                            <h4><a href="http://www.qidian.com/Book/1005204004.aspx" target="_blank" data-eid="qd_E05" data-bid="1005204004">大完美主播</a></h4>
                                            <p class="author">
                                                <img src="%E5%85%8D%E8%B4%B9_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=8886749" target="_blank" data-eid="qd_E06">大昊弟</a><em>|</em><a href="http://zhichang.qidian.com/" data-eid="qd_E07" target="_blank">职场</a><em>|</em><span>连载中</span>
                                            </p>
                                            <p class="intro">
                                                最完美最无解让人不得不喜欢的主播，奋斗，逍遥，享乐的人生！
                                            </p>
                                            <p class="update"><a href="http://vipreader.qidian.com/chapter/1005204004/369961959" data-eid="qd_E08" data-bid="1005204004" data-cid="//vipreader.qidian.com/chapter/1005204004/369961959" target="_blank">最新更新  第一百九十二章 风水轮流转</a><em>
                                                    ·</em><span>昨日22:40更新</span>
                                            </p>
                                        </div>
                                        <div class="book-right-info">
                                            <div class="price">
                                                <p><span>¥</span>0</p>
                                                <s>¥7</s>
                                            </div>
                                            <p class="btn">
                                                <a class="red-btn" href="http://www.qidian.com/Book/1005204004.aspx" target="_blank" data-eid="qd_E02">免费阅读</a>

                                                <a class="blue-btn add-book" href="javascript:" data-eid="qd_E03" data-bookid="1005204004" data-bid="1005204004">加入书架</a>
                                            </p>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="book-img-box">
                                            <div class="score">8.8</div>
                                            <a href="http://www.qidian.com/Book/1004177183.aspx" data-eid="qd_E04" data-bid="1004177183" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/150_002.jpg"></a>
                                        </div>
                                        <div class="book-mid-info">
                                            <h4><a href="http://www.qidian.com/Book/1004177183.aspx" target="_blank" data-eid="qd_E05" data-bid="1004177183">道辟九霄</a></h4>
                                            <p class="author">
                                                <img src="%E5%85%8D%E8%B4%B9_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=8818116" target="_blank" data-eid="qd_E06">太上真君</a><em>|</em><a href="http://xianxia.qidian.com/" data-eid="qd_E07" target="_blank">仙侠</a><em>|</em><span>连载中</span>
                                            </p>
                                            <p class="intro">

                                                重阳流连，昔年勘破桃花处。大道心开，立得九重天上来。天涯回首，不见旧乡三四友。羽化升遐，与天同寿神仙家。手持神秘龙鳞，开辟九重仙天，光耀诸天世
                                                界，少年展开自己的仙侠之旅。
                                            </p>
                                            <p class="update"><a href="http://vipreader.qidian.com/chapter/1004177183/370009650" data-eid="qd_E08" data-bid="1004177183" data-cid="//vipreader.qidian.com/chapter/1004177183/370009650" target="_blank">最新更新  第二百五十四章九灵积德善根种，二仙设计入正道</a><em>
                                                    ·</em><span>今天13:46更新</span>
                                            </p>
                                        </div>
                                        <div class="book-right-info">
                                            <div class="price">
                                                <p><span>¥</span>0</p>
                                                <s>¥29</s>
                                            </div>
                                            <p class="btn">
                                                <a class="red-btn" href="http://www.qidian.com/Book/1004177183.aspx" target="_blank" data-eid="qd_E02">免费阅读</a>

                                                <a class="blue-btn add-book" href="javascript:" data-eid="qd_E03" data-bookid="1004177183" data-bid="1004177183">加入书架</a>
                                            </p>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="book-img-box">
                                            <div class="score">7.4</div>
                                            <a href="http://www.qidian.com/Book/1003624460.aspx" data-eid="qd_E04" data-bid="1003624460" target="_blank"><img src="%E5%85%8D%E8%B4%B9_files/150_003.jpg"></a>
                                        </div>
                                        <div class="book-mid-info">
                                            <h4><a href="http://www.qidian.com/Book/1003624460.aspx" target="_blank" data-eid="qd_E05" data-bid="1003624460">老九门</a></h4>
                                            <p class="author">
                                                <img src="%E5%85%8D%E8%B4%B9_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4490430" target="_blank" data-eid="qd_E06">南派三叔</a><em>|</em><a href="http://lingyi.qidian.com/" data-eid="qd_E07" target="_blank">灵异</a><em>|</em><span>连载中</span>
                                            </p>
                                            <p class="intro">

                                                民国时期，长沙车站开来一辆来历不明的火车，彻查发现来自一座深山中的百年矿山，因为常年开采导致地皮塌陷，矿山中弥漫着一股奇怪的浓雾，长沙老九门盗墓
                                                家族张家和红家经过了一番查探，发现了
                                            </p>
                                            <p class="update"><a href="http://vipreader.qidian.com/chapter/1003624460/341801837" data-eid="qd_E08" data-bid="1003624460" data-cid="//vipreader.qidian.com/chapter/1003624460/341801837" target="_blank">最新更新  第三十一章 惨胜</a><em>
                                                    ·</em><span>2016-11-11 11:45:31</span>
                                            </p>
                                        </div>
                                        <div class="book-right-info">
                                            <div class="price">
                                                <p><span>¥</span>0</p>
                                                <s>¥4</s>
                                            </div>
                                            <p class="btn">
                                                <a class="red-btn" href="http://www.qidian.com/Book/1003624460.aspx" target="_blank" data-eid="qd_E02">免费阅读</a>

                                                <a class="blue-btn add-book" href="javascript:" data-eid="qd_E03" data-bookid="1003624460" data-bid="1003624460">加入书架</a>
                                            </p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- end 限免书数据列表-->

                    </div>

                    <!-- end 左侧限时免费列表 -->

                    <!-- start 右侧下期预告 -->
                    <div class="right-side-wrap fr" data-l1="6">
                        <div class="other-rec-wrap">
                            <h3 class="lang">下期预告</h3>
                            <!-- start 暂无下期预告 -->

                            <!-- end 暂无下期预告 -->
                            <!-- start 下期预告数据列表 -->
                            <ul>

                                <li data-rid="1">
                                    <div class="img-box">
                                        <span>9</span>
                                        <a href="http://www.qidian.com/Book/1002391954.aspx" target="_blank" data-eid="qd_E10" data-bid="1002391954"><img src="%E5%85%8D%E8%B4%B9_files/90_005.jpg"></a>
                                    </div>
                                    <div class="book-info">
                                        <h4><a href="http://www.qidian.com/Book/1002391954.aspx" target="_blank" data-eid="qd_E11" data-bid="1002391954">寻情仙使</a></h4>
                                        <p class="author"><img src="%E5%85%8D%E8%B4%B9_files/user.png"><a href="http://me.qidian.com/authorIndex.aspx?id=4363040" data-eid="qd_E12" target="_blank">陈风笑</a></p>
                                        <p class="intro">李永生从仙界到位面做观风使，这是仙界体察民意了解实情的职务。不过他主动下界，除了要完成任务，还有很重要的一点，那就是寻找在下界转生的仙侣。如何在不暴露身份的情况下找到她呢？对观风使</p>
                                    </div>
                                </li>

                                <li data-rid="2">
                                    <div class="img-box">
                                        <span>7.5</span>
                                        <a href="http://www.qidian.com/Book/1003719686.aspx" target="_blank" data-eid="qd_E10" data-bid="1003719686"><img src="%E5%85%8D%E8%B4%B9_files/90_002.jpg"></a>
                                    </div>
                                    <div class="book-info">
                                        <h4><a href="http://www.qidian.com/Book/1003719686.aspx" target="_blank" data-eid="qd_E11" data-bid="1003719686">娱乐点金手</a></h4>
                                        <p class="author"><img src="%E5%85%8D%E8%B4%B9_files/user.png"><a href="http://me.qidian.com/authorIndex.aspx?id=3628501" data-eid="qd_E12" target="_blank">俗人小黑</a></p>
                                        <p class="intro">穿越平行世界，从那些雷人的叫卖广告开始！已经完本200W字《绝世大明星》人品保证！</p>
                                    </div>
                                </li>

                                <li data-rid="3">
                                    <div class="img-box">
                                        <span>8.4</span>
                                        <a href="http://www.qidian.com/Book/3368425.aspx" target="_blank" data-eid="qd_E10" data-bid="3368425"><img src="%E5%85%8D%E8%B4%B9_files/90.jpg"></a>
                                    </div>
                                    <div class="book-info">
                                        <h4><a href="http://www.qidian.com/Book/3368425.aspx" target="_blank" data-eid="qd_E11" data-bid="3368425">位面破坏神</a></h4>
                                        <p class="author"><img src="%E5%85%8D%E8%B4%B9_files/user.png"><a href="http://me.qidian.com/authorIndex.aspx?id=4250684" data-eid="qd_E12" target="_blank">卒印</a></p>
                                        <p class="intro">武侠、动漫、仙侠，历经各个位面。以破界珠为本，以大执念为宗，破碎万界，随心所欲。</p>
                                    </div>
                                </li>

                                <li data-rid="4">
                                    <div class="img-box">
                                        <span>7.4</span>
                                        <a href="http://www.qidian.com/Book/1005406712.aspx" target="_blank" data-eid="qd_E10" data-bid="1005406712"><img src="%E5%85%8D%E8%B4%B9_files/90_007.jpg"></a>
                                    </div>
                                    <div class="book-info">
                                        <h4><a href="http://www.qidian.com/Book/1005406712.aspx" target="_blank" data-eid="qd_E11" data-bid="1005406712">长生处处开宝箱</a></h4>
                                        <p class="author"><img src="%E5%85%8D%E8%B4%B9_files/user.png"><a href="http://me.qidian.com/authorIndex.aspx?id=7349463" data-eid="qd_E12" target="_blank">柴余</a></p>
                                        <p class="intro">侠客遍地，仙佛漫天，妖魔横行，一个光怪陆离的世界。主角带着宝箱系统，问道求长生，一路上到处开宝箱的故事。“提示：开出嫦娥仙子亵裤一条！”广寒宫中，主角抓着冰凉丝滑的白色蕾丝小裤裤，</p>
                                    </div>
                                </li>

                                <li data-rid="5">
                                    <div class="img-box">
                                        <span>7.7</span>
                                        <a href="http://www.qidian.com/Book/3687469.aspx" target="_blank" data-eid="qd_E10" data-bid="3687469"><img src="%E5%85%8D%E8%B4%B9_files/90_003.jpg"></a>
                                    </div>
                                    <div class="book-info">
                                        <h4><a href="http://www.qidian.com/Book/3687469.aspx" target="_blank" data-eid="qd_E11" data-bid="3687469">武侠开端</a></h4>
                                        <p class="author"><img src="%E5%85%8D%E8%B4%B9_files/user.png"><a href="http://me.qidian.com/authorIndex.aspx?id=4435864" data-eid="qd_E12" target="_blank">刘少冲</a></p>
                                        <p class="intro">写武侠小说，只是开端！拥有地球记忆宫殿的林牧，重生平行世界。写最好看的小说！吃最萝莉的棒棒糖！逗最可爱的女书迷！用最纯洁的文笔，写最邪恶的故事……普通群号231647855，VIP</p>
                                    </div>
                                </li>

                                <li data-rid="6">
                                    <div class="img-box">
                                        <span>7.6</span>
                                        <a href="http://www.qidian.com/Book/1004879549.aspx" target="_blank" data-eid="qd_E10" data-bid="1004879549"><img src="%E5%85%8D%E8%B4%B9_files/90_006.jpg"></a>
                                    </div>
                                    <div class="book-info">
                                        <h4><a href="http://www.qidian.com/Book/1004879549.aspx" target="_blank" data-eid="qd_E11" data-bid="1004879549">苍白之手</a></h4>
                                        <p class="author"><img src="%E5%85%8D%E8%B4%B9_files/user.png"><a href="http://me.qidian.com/authorIndex.aspx?id=6344" data-eid="qd_E12" target="_blank">牙齿</a></p>
                                        <p class="intro">一切源自意外点燃的火花。主角鲁斌穿越后，在诸位面世界游历的记录。</p>
                                    </div>
                                </li>

                                <li data-rid="7">
                                    <div class="img-box">
                                        <span>7.4</span>
                                        <a href="http://www.qidian.com/Book/1003624460.aspx" target="_blank" data-eid="qd_E10" data-bid="1003624460"><img src="%E5%85%8D%E8%B4%B9_files/90_004.jpg"></a>
                                    </div>
                                    <div class="book-info">
                                        <h4><a href="http://www.qidian.com/Book/1003624460.aspx" target="_blank" data-eid="qd_E11" data-bid="1003624460">老九门</a></h4>
                                        <p class="author"><img src="%E5%85%8D%E8%B4%B9_files/user.png"><a href="http://me.qidian.com/authorIndex.aspx?id=4490430" data-eid="qd_E12" target="_blank">南派三叔</a></p>
                                        <p class="intro">民国时期，长沙车站开来一辆来历不明的火车，彻查发现来自一座深山中的百年矿山，因为常年开采导致地皮塌陷，矿山中弥漫着一股奇怪的浓雾，长沙老九门盗墓家族张家和红家经过了一番查探，发现了</p>
                                    </div>
                                </li>

                            </ul>

                            <!-- end 下期预告数据列表 -->
                        </div>
                    </div>
                    <!-- end 右侧下期预告 -->
                </div>
            </div>
            <!-- end 限时免费 -->
        </div>
        <!-- end 免费内容区 -->


    </div>
    <!-- end 免费频道容器 -->


    <!-- start 页脚 -->
    <!-- start 页脚 -->
    <div class="footer">
        <!--start 友情链接-->
        <div class="box-center cf">
            <div class="friend-link">
                <em><a class="yuewen" href="http://www.yuewen.com/" target="_blank">阅文集团</a><cite>旗下网站：</cite></em>
                <a href="http://www.qidian.com/">起点中文网</a>
                <a href="http://www.qdmm.com/" target="_blank">起点女生网</a>
                <a href="http://chuangshi.qq.com/" target="_blank">创世中文网</a>
                <a href="http://yunqi.qq.com/" target="_blank">云起书院</a>
                <!--<a href="http://www.rongshuxia.com" target="_blank">榕树下</a>-->
                <a href="http://www.hongxiu.com/" target="_blank">红袖添香</a>
                <a href="http://www.readnovel.com/" target="_blank">小说阅读网</a>
                <a href="http://www.xs8.cn/" target="_blank">言情小说吧</a>
                <a href="http://www.xxsy.net/" target="_blank">潇湘书院</a>
                <a href="http://www.tingbook.com/" target="_blank">天方听书网</a>
                <a href="http://www.lrts.me/" target="_blank">懒人听书</a>
                <a href="http://yuedu.yuewen.com/" target="_blank">阅文悦读</a>
                <a href="http://www.yuewen.com/app.html#appqq" target="_blank">QQ阅读</a>
                <a href="http://www.yuewen.com/app.html#appqd" target="_blank">起点读书</a>
                <a href="http://www.yuewen.com/app.html#appzj" target="_blank">作家助手</a>
                <a href="http://www.webnovel.com/" target="_blank">起点国际版</a>
            </div>
            <!--end 友情链接-->
            <!--start 页脚菜单-->
            <div class="footer-menu dib-wrap">
                <a href="http://www.qidian.com/about/intro" target="_blank">关于起点</a>
                <a href="http://www.qidian.com/about/contact" target="_blank">联系我们</a>
                <a href="http://join.book.qq.com/index.html" target="_blank">加入我们</a>
                <a href="http://www.qidian.com/help/index/2" target="_blank">帮助中心</a>
                <a href="http://bbs.qidian.com/list/53" target="_blank">提交建议</a>
                <a href="http://wwwploy.qidian.com/help/about_link.aspx" target="_blank">合作伙伴</a>
                <a href="http://bbs.qidian.com/" target="_blank">起点论坛</a>
                <!--<a href="http://shop.qidian.com/Index.aspx" target="_blank">起点商城</a>-->
                <a href="http://webgame.qidian.com/jiazhang.html" target="_blank">家长监护工程</a>
            </div>
            <!--end 页脚菜单-->
            <!--start 版权-->
            <div class="copy-right">
                <p><span>Copyright © 2002-2017 www.qidian.com All Rights Reserved</span>版权所有 上海玄霆娱乐信息科技有限公司 地址：中国（上海）自由贸易试验区碧波路690号6幢101室、201室</p>
                <p>上海玄霆娱乐信息科技有限公司 增值电信业务经营许可证沪B2-20080046 沪网文[2015]0081-031 新出网证（沪）字010 沪ICP备08017520号-1</p>
                <p>请所有作者发布作品时务必遵守国家互联网信息管理办法规定，我们拒绝任何色情小说，一经发现，即作删除！举报电话：010-59357051</p>
                <p>本站所收录作品、社区话题、书库评论及本站所做之广告均属个人行为，与本站立场无关</p>
            </div>
            <!--end 版权-->


        </div>
    </div>
    <!-- end 页脚 -->
    <!-- end 页脚 -->
</div>
<!-- start LBF lib -->
<script data-ignore="true" src="js/LBF.js"></script>
<script>
    LBF.config({"paths":{"site":"//qidian.gtimg.com/qd/js","qd":"//qidian.gtimg.com/qd"},"vars":{"theme":"//qidian.gtimg.com/qd/css"},"combo":true,"debug":false});
    // 全局的通用数据都放g_data变量里
    var g_data = {};
    // 环境变量，会按照环境选择性打log
    g_data.envType = 'pro';
    // 用作统计PV
    g_data.pageId = 'qd_P_limitfree';
    g_data.targetUrl = '//f.qidian.com';
    //环境域名
    g_data.domainPreFix = '';
    // 域名环境变量
    g_data.domainSearch = 'se.qidian.com';
</script>
<script>
    LBF.use(['lib.jQuery', 'monitor.SpeedReport', 'qd/js/free/limitedFree.0.53.js'], function ($, SpeedReport, LimitFree) {

        // 页面逻辑入口
        new LimitFree({});
        $(window).on('load.speedReport', function () {
            // speedTimer[onload]
            speedTimer.push(new Date().getTime());
            var f1 = 7718, // china reading limited's ID
                f2 = 219, // site ID
                f3 = 11; // page ID
            // chrome & IE9 Performance API
            SpeedReport.reportPerformance({
                flag1: f1,
                flag2: f2,
                flag3IE: f3,
                flag3Chrome: f3,
                rate:0.1,
                url: '//isdspeed.qidian.com/cgi-bin/r.cgi'
            });
            // common speedTimer:['dom ready', 'onload']
            var speedReport = SpeedReport.create({
                flag1: f1,
                flag2: f2,
                flag3: f3,
                start: speedZero,
                rate:0.1,
                url: '//isdspeed.qidian.com/cgi-bin/r.cgi'
            });
            // chrome & IE9 Performance API range 1~19, common speedTimer use 20+
            for (var i = 0; i < speedTimer.length; i++) {
                speedReport.add(speedTimer[i], i + 20)
            }
            // http://isdspeed.qq.com/cgi-bin/r.cgi?flag1=7718&flag2=224&flag3=1&1=38&2=38&…
            speedReport.send();
        })
    });
    // speedTimer[dom ready], put it before </body>
    speedTimer.push(new Date().getTime());
</script>
<!-- end LBF lib -->



<div style="position: absolute; display: none; max-height: 384px; z-index: 9999;" class="lbf-autocomplete-suggestions"></div></body></html>
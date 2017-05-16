<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>完本频道_起点中文网</title>
    <meta name="description" content="起点中文小说网提供完本玄幻小说,完本武侠小说,完本都市小说,完本言情小说等各种分类的完本小说,完本小说排行榜,更多好看的完本小说就在起点中文网完本频道">
    <meta name="keywords" content="完本小说,完结小说,全本小说,起点中文网全本频道">
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

    <link rel="stylesheet" data-ignore="true" href="css/theend/Button.css">













    <link href="css/theend/Autocomplete.css" rel="stylesheet" charset="utf-8"><link href="css/theend/Dropdown.css" rel="stylesheet" charset="utf-8"><link href="css/theend/Popup.css" rel="stylesheet" charset="utf-8"></head>
<body>
<!-- start 通用body层 -->
<!-- start 微信分享小图标 -->
<div class="share-img">
    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/share.png" height="300" width="300">
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
                    <a id="login-btn" class="black" href="?r=login/login" data-eid="qd_A06">登录</a><em>|</em><a id="reg-btn" href="?r
                    =resgin/newresgin" target="_blank" data-eid="qd_A07">注册</a>
                </div>
            </div>
            <div class="nav-link fl">
                <a class="act" href="/" data-eid="qd_A01">起点中文网</a>

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
                <!-- start 页游手游 -->
                <li class="game phone" id="game-phone">

                    <!-- start 手游下拉框 -->
                    <div class="game-dropdown hidden" id="phone-dropdown">
                        <cite></cite>
                        <dl class="phone-list">

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A39" target="_blank">灵魂撕裂</a><i>经典格斗</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vSG9tZS9QYy9JbmRleC9kZXRhaWwvZ2FtZWlkLzIwMDU0Mg==&amp;code=5733ed85f2cd0" target="_blank" data-eid="qd_A39"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_009.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A40" target="_blank">天命传说</a><i>策略RPG</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vSG9tZS9QYy9JbmRleC9kZXRhaWwvZ2FtZWlkLzIwMDUxNQ==&amp;code=5733edc4a3435" target="_blank" data-eid="qd_A40"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_004.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A41" target="_blank">我是大将军</a><i>策略RPG</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vYXBpL3N5eHMvc2dhbWUvUGxheS5waHA/Z2FtZWlkPTIwMDUxMiZzZXJ2ZXJpZD0xJnR5PTE=&amp;code=5769f94031529" target="_blank" data-eid="qd_A41"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_003.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                        </dl>
                        <div class="bottom">
                            <h4>新游上线|妖怪宝可萌</h4>
                            <p><a href="http://sy.qidian.com/api/syxs/sgame/Play.php?gameid=200549&amp;serverid=1&amp;ty=1&amp;qd_game_key=192x86&amp;qd_dd_p1=141" data-eid="qd_A42" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_008.jpg" alt=""><i class="op-tag"></i></a></p>
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
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/wldf" data-eid="qd_A31" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/dyjd" data-eid="qd_A32" target="_blank">第一舰队</a><strong>11区</strong></h3>
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/dyjd" data-eid="qd_A32" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_006.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=dtss" data-eid="qd_A33" target="_blank">大唐盛世</a><strong>14区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=dtss" data-eid="qd_A33" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_010.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=qyz" data-eid="qd_A34" target="_blank">青云志</a><strong>31区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=qyz" data-eid="qd_A34" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_002.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/lscq" data-eid="qd_A35" target="_blank">梁山传奇</a><strong>4区</strong></h3>
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/lscq" data-eid="qd_A35" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_011.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=zjzr" data-eid="qd_A36" target="_blank">最佳阵容</a><strong>12区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=zjzr" data-eid="qd_A36" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_007.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=jyyx" data-eid="qd_A37" target="_blank">锦衣夜行</a><strong>27区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=jyyx" data-eid="qd_A37" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_005.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                            </dl>
                            <div class="bottom">
                                <h4>悬赏</h4>
                                <p><a href="http://xs.game.qidian.com/?qd_game_key=xs192x86&amp;qd_dd_p1=124" data-eid="qd_A38" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0.gif"><span class="op-tag"></span></a></p>
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

    <!-- start 全部作品容器 -->
    <div class="all-pro-wrap box-center cf">
        <!-- start 侧边栏筛选条件 -->
        <!--完本、全本、免费频道左边菜单栏-->
        <div class="range-sidebar fl" data-l1="4">
            <!-- start 选择站点 -->
            <div class="site" data-l2="1">
                <a class="act" href="javascript:">男生</a><a href="http://all.qdmm.com/Default.aspx" target="_blank" data-eid="qd_B15">女生</a>
            </div>
            <!-- end 选择站点 -->
            <!-- start 已选-->
            <div class="selected" data-l2="2">

                <p><span>已选</span>

                    <a class="all" href="javascript:" type="all">全部</a>

                </p></div>
            <!-- end 已选-->
            <!-- start 条件筛选列表 -->
            <div class="select-list">
                <!-- start 作品分类 -->
                <div class="work-filter type-filter" data-l2="3">


                    <h3>分类</h3>
                    <!-- 第一行一级分类 cite和i是嵌套的小三角-->
                    <ul class="row-1" type="category">
                        <li id="all" data-id="-1" class="act"><a href="javascript:" data-eid="qd_B17">全部</a></li>
                        <li data-id="21" id="xh" class=""><a href="javascript:" data-eid="qd_B18">玄幻<cite><i></i></cite></a></li>
                        <li data-id="1" id="qh" class=""><a href="javascript:" data-eid="qd_B19">奇幻<cite><i></i></cite></a></li>
                        <li data-id="2" id="wx" class=""><a href="javascript:" data-eid="qd_B20">武侠<cite><i></i></cite></a></li>
                        <li data-id="22" id="xx" class=""><a href="javascript:" data-eid="qd_B21">仙侠<cite><i></i></cite></a></li>
                    </ul>
                    <!-- 点击后展示对应的子分类 默认隐藏 目前是为了展示选中一级分类时的状态 -->
                    <!-- 跳转回显页面时，先隐藏所有的sub-type，然后重新显示对应行的子分类 -->

                    <div class="sub-type hidden">
                        <!--玄幻start-->
                        <dl class="hidden">


                            <dd data-subtype="8" class=""><a href="javascript:">东方玄幻</a></dd>

                            <dd data-subtype="73" class=""><a href="javascript:">异世大陆</a></dd>

                            <dd data-subtype="58" class=""><a href="javascript:">王朝争霸</a></dd>

                            <dd data-subtype="78" class=""><a href="javascript:">高武世界</a></dd>

                        </dl>
                        <!--玄幻end-->
                        <!--奇幻start-->
                        <dl class="hidden">


                            <dd data-subtype="38" class=""><a href="javascript:">现代魔法</a></dd>

                            <dd data-subtype="62" class=""><a href="javascript:">剑与魔法</a></dd>

                            <dd data-subtype="201" class=""><a href="javascript:">史诗奇幻</a></dd>

                            <dd data-subtype="202" class=""><a href="javascript:">黑暗幻想</a></dd>

                            <dd data-subtype="20092" class=""><a href="javascript:">历史神话</a></dd>

                            <dd data-subtype="20093" class=""><a href="javascript:">另类幻想</a></dd>

                        </dl>
                        <!--奇幻end-->
                        <!--武侠start-->
                        <dl class="hidden">


                            <dd data-subtype="5" class=""><a href="javascript:">传统武侠</a></dd>

                            <dd data-subtype="30" class=""><a href="javascript:">武侠幻想</a></dd>

                            <dd data-subtype="206" class=""><a href="javascript:">国术无双</a></dd>

                        </dl>
                        <!--武侠end-->
                        <!--仙侠start-->
                        <dl class="hidden">


                            <dd data-subtype="18" class=""><a href="javascript:">修真文明</a></dd>

                            <dd data-subtype="44" class=""><a href="javascript:">幻想修仙</a></dd>

                            <dd data-subtype="64" class=""><a href="javascript:">现代修真</a></dd>

                            <dd data-subtype="207" class=""><a href="javascript:">神话修真</a></dd>

                        </dl>
                        <!--仙侠end-->
                    </div>
                    <!-- 第二行一级分类 -->


                    <ul class="row-2" type="category">
                        <li data-id="4" id="ds" class=""><a href="javascript:" data-eid="qd_B22">都市<cite><i></i></cite></a></li>
                        <li data-id="15" id="zc" class=""><a href="javascript:" data-eid="qd_B23">职场<cite><i></i></cite></a></li>
                        <li data-id="6" id="js" class=""><a href="javascript:" data-eid="qd_B24">军事<cite><i></i></cite></a></li>
                        <li data-id="5" id="ls" class=""><a href="javascript:" data-eid="qd_B25">历史<cite><i></i></cite></a></li>
                        <li data-id="7" id="yx" class=""><a href="javascript:" data-eid="qd_B26">游戏<cite><i></i></cite></a></li>
                    </ul>
                    <!-- 点击后展示对应的子分类 默认隐藏 -->

                    <div class="sub-type hidden">
                        <!--都市start-->
                        <dl class="hidden">


                            <dd data-subtype="12" class=""><a href="javascript:">都市生活</a></dd>

                            <dd data-subtype="16" class=""><a href="javascript:">恩怨情仇</a></dd>

                            <dd data-subtype="74" class=""><a href="javascript:">异术超能</a></dd>

                            <dd data-subtype="209" class=""><a href="javascript:">现实百态</a></dd>

                            <dd data-subtype="6" class=""><a href="javascript:">爱情婚姻</a></dd>

                            <dd data-subtype="130" class=""><a href="javascript:">青春校园</a></dd>

                        </dl>
                        <!--都市end-->
                        <!--职场start-->
                        <dl class="hidden">


                            <dd data-subtype="151" class=""><a href="javascript:">娱乐明星</a></dd>

                            <dd data-subtype="152" class=""><a href="javascript:">官场沉浮</a></dd>

                            <dd data-subtype="153" class=""><a href="javascript:">商战职场</a></dd>

                        </dl>
                        <!--职场end-->
                        <!--军事start-->
                        <dl class="hidden">


                            <dd data-subtype="54" class=""><a href="javascript:">军旅生涯</a></dd>

                            <dd data-subtype="65" class=""><a href="javascript:">军事战争</a></dd>

                            <dd data-subtype="80" class=""><a href="javascript:">战争幻想</a></dd>

                            <dd data-subtype="230" class=""><a href="javascript:">抗战烽火</a></dd>

                            <dd data-subtype="231" class=""><a href="javascript:">谍战特工</a></dd>

                        </dl>
                        <!--军事end-->
                        <!--历史start-->
                        <dl class="hidden">


                            <dd data-subtype="22" class=""><a href="javascript:">架空历史</a></dd>

                            <dd data-subtype="48" class=""><a href="javascript:">秦汉三国</a></dd>

                            <dd data-subtype="220" class=""><a href="javascript:">上古先秦</a></dd>

                            <dd data-subtype="32" class=""><a href="javascript:">历史传记</a></dd>

                            <dd data-subtype="222" class=""><a href="javascript:">两晋隋唐</a></dd>

                            <dd data-subtype="223" class=""><a href="javascript:">五代十国</a></dd>

                            <dd data-subtype="224" class=""><a href="javascript:">两宋元明</a></dd>

                            <dd data-subtype="225" class=""><a href="javascript:">清史民国</a></dd>

                            <dd data-subtype="226" class=""><a href="javascript:">外国历史</a></dd>

                            <dd data-subtype="20094" class=""><a href="javascript:">民间传说</a></dd>

                        </dl>
                        <!--历史end-->
                        <!--游戏start-->
                        <dl class="hidden">


                            <dd data-subtype="7" class=""><a href="javascript:">电子竞技</a></dd>

                            <dd data-subtype="70" class=""><a href="javascript:">虚拟网游</a></dd>

                            <dd data-subtype="76" class=""><a href="javascript:">游戏生涯</a></dd>

                            <dd data-subtype="240" class=""><a href="javascript:">游戏异界</a></dd>

                        </dl>
                        <!--游戏end-->
                    </div>
                    <!-- 第三行一级分类 -->

                    <ul class="row-3" type="category">
                        <li data-id="8" id="jj" class=""><a href="javascript:" data-eid="qd_B27">体育<cite><i></i></cite></a></li>
                        <li data-id="9" id="kh" class=""><a href="javascript:" data-eid="qd_B28">科幻<cite><i></i></cite></a></li>
                        <li data-id="10" id="ly" class=""><a href="javascript:" data-eid="qd_B29">灵异<cite><i></i></cite></a></li>
                        <li data-id="12" id="ecy" class=""><a href="javascript:" data-eid="qd_B30">二次元<cite><i></i></cite></a></li>
                        <li data-id="20076" id="dp" class=""><a href="javascript:" data-eid="qd_B70">短篇<cite><i></i></cite></a></li>
                    </ul>
                    <!-- 点击后展示对应的子分类 默认隐藏 -->

                    <div class="sub-type hidden">

                        <!--竞技start-->
                        <dl class="hidden">


                            <dd data-subtype="28" class=""><a href="javascript:">篮球运动</a></dd>

                            <dd data-subtype="55" class=""><a href="javascript:">体育赛事</a></dd>

                            <dd data-subtype="82" class=""><a href="javascript:">足球运动</a></dd>

                        </dl>
                        <!--竞技end-->
                        <!--科幻start-->
                        <dl class="hidden">


                            <dd data-subtype="21" class=""><a href="javascript:">宇宙练功</a></dd>

                            <dd data-subtype="25" class=""><a href="javascript:">未来世界</a></dd>

                            <dd data-subtype="68" class=""><a href="javascript:">星际文明</a></dd>

                            <dd data-subtype="250" class=""><a href="javascript:">超级科技</a></dd>

                            <dd data-subtype="251" class=""><a href="javascript:">时空穿梭</a></dd>

                            <dd data-subtype="252" class=""><a href="javascript:">进化变异</a></dd>

                            <dd data-subtype="253" class=""><a href="javascript:">末世危机</a></dd>

                        </dl>
                        <!--科幻end-->
                        <!--灵异start-->
                        <dl class="hidden">


                            <dd data-subtype="26" class=""><a href="javascript:">恐怖惊悚</a></dd>

                            <dd data-subtype="35" class=""><a href="javascript:">灵异鬼怪</a></dd>

                            <dd data-subtype="57" class=""><a href="javascript:">悬疑侦探</a></dd>

                            <dd data-subtype="260" class=""><a href="javascript:">寻墓探险</a></dd>

                            <dd data-subtype="20095" class=""><a href="javascript:">风水秘术</a></dd>

                        </dl>
                        <!--灵异end-->
                        <!--二次元start-->
                        <dl class="hidden">


                            <dd data-subtype="10" class=""><a href="javascript:">变身入替</a></dd>

                            <dd data-subtype="60" class=""><a href="javascript:">原生幻想</a></dd>

                            <dd data-subtype="66" class=""><a href="javascript:">青春日常</a></dd>

                            <dd data-subtype="281" class=""><a href="javascript:">衍生同人</a></dd>

                            <dd data-subtype="282" class=""><a href="javascript:">搞笑吐槽</a></dd>

                        </dl>
                        <!--二次元end-->
                        <!--短篇start-->
                        <dl class="hidden">


                            <dd data-subtype="20097" class=""><a href="javascript:">诗歌散文</a></dd>

                            <dd data-subtype="20098" class=""><a href="javascript:">人物传记</a></dd>

                            <dd data-subtype="20075" class=""><a href="javascript:">影视剧本</a></dd>

                            <dd data-subtype="20077" class=""><a href="javascript:">评论文集</a></dd>

                            <dd data-subtype="20078" class=""><a href="javascript:">生活随笔</a></dd>

                            <dd data-subtype="20079" class=""><a href="javascript:">美文游记</a></dd>

                            <dd data-subtype="20081" class=""><a href="javascript:">儿童文学</a></dd>

                            <dd data-subtype="20096" class=""><a href="javascript:">短篇小说</a></dd>

                        </dl>
                        <!--短篇end-->
                    </div>
                </div>
                <!-- end 作品分类 -->
                <!-- start 作品状态 -->

                <!-- end 作品状态 -->
                <!-- start 作品属性 -->


                <div class="work-filter vip-filter" data-l2="5">

                    <h3>属性</h3>
                    <ul type="vip">
                        <li data-id="-1" class="act"><a href="javascript:" data-eid="qd_B34">全部</a></li>
                        <li data-id="0"><a href="javascript:" data-eid="qd_B35">免费</a></li>
                        <li data-id="1" -1=""><a href="javascript:" data-eid="qd_B36">VIP</a></li>
                    </ul>
                </div>


                <!-- end 作品属性 -->
                <!-- start 作品字数 -->
                <div class="work-filter" data-l2="6">

                    <h3>字数</h3>
                    <ul type="size">
                        <li data-id="-1" class="act"><a href="javascript:" data-eid="qd_B37">全部</a></li>
                        <li data-id="1"><a href="javascript:" data-eid="qd_B38">30万字以下</a></li>
                        <li data-id="2"><a href="javascript:" data-eid="qd_B39">30-50万字</a></li>
                        <li data-id="3"><a href="javascript:" data-eid="qd_B40">50-100万字</a></li>
                        <li data-id="4"><a href="javascript:" data-eid="qd_B41">100-200万字</a></li>
                        <li data-id="5"><a href="javascript:" data-eid="qd_B42">200万字以上</a></li>
                    </ul>
                </div>
                <!-- end 作品字数 -->
                <!-- start 作品品质 -->
                <div class="work-filter" data-l2="7">

                    <h3>品质</h3>
                    <ul type="sign">
                        <li data-id="-1" class="act"><a href="javascript:" data-eid="qd_B43">全部</a></li>
                        <li data-id="1"><a href="javascript:" data-eid="qd_B44">签约作品</a></li>
                        <li data-id="2"><a href="javascript:" data-eid="qd_B45">精品小说</a></li>
                    </ul>
                </div>
                <!-- end 作品品质 -->
                <!-- start 更新时间-->
                <div class="work-filter" data-l2="9">

                    <h3>更新时间</h3>
                    <ul type="update">
                        <li data-id="-1" class="act"><a href="javascript:" data-eid="qd_B71">全部</a></li>
                        <li data-id="1"><a href="javascript:" data-eid="qd_B72">三日内</a></li>
                        <li data-id="2"><a href="javascript:" data-eid="qd_B73">七日内</a></li>
                        <li data-id="3"><a href="javascript:" data-eid="qd_B74">半月内</a></li>
                        <li data-id="4"><a href="javascript:" data-eid="qd_B75">一月内</a></li>
                    </ul>
                </div>
                <!-- end 更新时间 -->
                <!-- start 作品标签 -->
                <div class="work-filter tag" data-l2="8">
                    <h3>标签</h3>

                    <ul type="tag">

                        <li data-eid="qd_B46" class="act"><a href="javascript:">全部</a></li>

                        <li data-eid="qd_B47" data-tid="豪门"><a href="javascript:">豪门</a></li>

                        <li data-eid="qd_B47" data-tid="孤儿"><a href="javascript:">孤儿</a></li>

                        <li data-eid="qd_B47" data-tid="盗贼"><a href="javascript:">盗贼</a></li>

                        <li data-eid="qd_B47" data-tid="特工"><a href="javascript:">特工</a></li>

                        <li data-eid="qd_B47" data-tid="黑客"><a href="javascript:">黑客</a></li>

                        <li data-eid="qd_B47" data-tid="明星"><a href="javascript:">明星</a></li>

                        <li data-eid="qd_B47" data-tid="特种兵"><a href="javascript:">特种兵</a></li>

                        <li data-eid="qd_B47" data-tid="杀手"><a href="javascript:">杀手</a></li>

                        <li data-eid="qd_B47" data-tid="老师"><a href="javascript:">老师</a></li>

                        <li data-eid="qd_B47" data-tid="学生"><a href="javascript:">学生</a></li>


                        <!-- 预先被隐藏的标签 -->

                        <li class="more" id="unfold"><a href="javascript:" data-eid="qd_B48">展开<span><i></i></span></a></li>

                        <li data-eid="qd_B47" data-tid="胖子" class="hidden"><a href="javascript:">胖子</a></li>

                        <li data-eid="qd_B47" data-tid="宠物" class="hidden"><a href="javascript:">宠物</a></li>

                        <li data-eid="qd_B47" data-tid="蜀山" class="hidden"><a href="javascript:">蜀山</a></li>

                        <li data-eid="qd_B47" data-tid="魔王附体" class="hidden"><a href="javascript:">魔王附体</a></li>

                        <li data-eid="qd_B47" data-tid="LOL" class="hidden"><a href="javascript:">LOL</a></li>

                        <li data-eid="qd_B47" data-tid="废材流" class="hidden"><a href="javascript:">废材流</a></li>

                        <li data-eid="qd_B47" data-tid="护短" class="hidden"><a href="javascript:">护短</a></li>

                        <li data-eid="qd_B47" data-tid="卡片" class="hidden"><a href="javascript:">卡片</a></li>

                        <li data-eid="qd_B47" data-tid="手游" class="hidden"><a href="javascript:">手游</a></li>

                        <li data-eid="qd_B47" data-tid="法师" class="hidden"><a href="javascript:">法师</a></li>

                        <li data-eid="qd_B47" data-tid="医生" class="hidden"><a href="javascript:">医生</a></li>

                        <li data-eid="qd_B47" data-tid="感情" class="hidden"><a href="javascript:">感情</a></li>

                        <li data-eid="qd_B47" data-tid="鉴宝" class="hidden"><a href="javascript:">鉴宝</a></li>

                        <li data-eid="qd_B47" data-tid="亡灵" class="hidden"><a href="javascript:">亡灵</a></li>

                        <li data-eid="qd_B47" data-tid="职场" class="hidden"><a href="javascript:">职场</a></li>

                        <li data-eid="qd_B47" data-tid="吸血鬼" class="hidden"><a href="javascript:">吸血鬼</a></li>

                        <li data-eid="qd_B47" data-tid="龙" class="hidden"><a href="javascript:">龙</a></li>

                        <li data-eid="qd_B47" data-tid="西游" class="hidden"><a href="javascript:">西游</a></li>

                        <li data-eid="qd_B47" data-tid="鬼怪" class="hidden"><a href="javascript:">鬼怪</a></li>

                        <li data-eid="qd_B47" data-tid="阵法" class="hidden"><a href="javascript:">阵法</a></li>

                        <li data-eid="qd_B47" data-tid="魔兽" class="hidden"><a href="javascript:">魔兽</a></li>

                        <li data-eid="qd_B47" data-tid="勇猛" class="hidden"><a href="javascript:">勇猛</a></li>

                        <li data-eid="qd_B47" data-tid="玄学" class="hidden"><a href="javascript:">玄学</a></li>

                        <li data-eid="qd_B47" data-tid="群穿" class="hidden"><a href="javascript:">群穿</a></li>

                        <li data-eid="qd_B47" data-tid="丹药" class="hidden"><a href="javascript:">丹药</a></li>

                        <li data-eid="qd_B47" data-tid="练功流" class="hidden"><a href="javascript:">练功流</a></li>

                        <li data-eid="qd_B47" data-tid="召唤流" class="hidden"><a href="javascript:">召唤流</a></li>

                        <li data-eid="qd_B47" data-tid="恶搞" class="hidden"><a href="javascript:">恶搞</a></li>

                        <li data-eid="qd_B47" data-tid="爆笑" class="hidden"><a href="javascript:">爆笑</a></li>

                        <li data-eid="qd_B47" data-tid="轻松" class="hidden"><a href="javascript:">轻松</a></li>

                        <li data-eid="qd_B47" data-tid="冷酷" class="hidden"><a href="javascript:">冷酷</a></li>

                        <li data-eid="qd_B47" data-tid="腹黑" class="hidden"><a href="javascript:">腹黑</a></li>

                        <li data-eid="qd_B47" data-tid="阳光" class="hidden"><a href="javascript:">阳光</a></li>

                        <li data-eid="qd_B47" data-tid="狡猾" class="hidden"><a href="javascript:">狡猾</a></li>

                        <li data-eid="qd_B47" data-tid="机智" class="hidden"><a href="javascript:">机智</a></li>

                        <li data-eid="qd_B47" data-tid="猥琐" class="hidden"><a href="javascript:">猥琐</a></li>

                        <li data-eid="qd_B47" data-tid="嚣张" class="hidden"><a href="javascript:">嚣张</a></li>

                        <li data-eid="qd_B47" data-tid="淡定" class="hidden"><a href="javascript:">淡定</a></li>

                        <li data-eid="qd_B47" data-tid="僵尸" class="hidden"><a href="javascript:">僵尸</a></li>

                        <li data-eid="qd_B47" data-tid="丧尸" class="hidden"><a href="javascript:">丧尸</a></li>

                        <li data-eid="qd_B47" data-tid="盗墓" class="hidden"><a href="javascript:">盗墓</a></li>

                        <li data-eid="qd_B47" data-tid="随身流" class="hidden"><a href="javascript:">随身流</a></li>

                        <li data-eid="qd_B47" data-tid="软饭流" class="hidden"><a href="javascript:">软饭流</a></li>

                        <li data-eid="qd_B47" data-tid="无敌文" class="hidden"><a href="javascript:">无敌文</a></li>

                        <li data-eid="qd_B47" data-tid="异兽流" class="hidden"><a href="javascript:">异兽流</a></li>

                        <li data-eid="qd_B47" data-tid="系统流" class="hidden"><a href="javascript:">系统流</a></li>

                        <li data-eid="qd_B47" data-tid="洪荒流" class="hidden"><a href="javascript:">洪荒流</a></li>

                        <li data-eid="qd_B47" data-tid="学院流" class="hidden"><a href="javascript:">学院流</a></li>

                        <li data-eid="qd_B47" data-tid="位面" class="hidden"><a href="javascript:">位面</a></li>

                        <li data-eid="qd_B47" data-tid="铁血" class="hidden"><a href="javascript:">铁血</a></li>

                        <li data-eid="qd_B47" data-tid="励志" class="hidden"><a href="javascript:">励志</a></li>

                        <li data-eid="qd_B47" data-tid="坚毅" class="hidden"><a href="javascript:">坚毅</a></li>

                        <li data-eid="qd_B47" data-tid="变身" class="hidden"><a href="javascript:">变身</a></li>

                        <li data-eid="qd_B47" data-tid="强者回归" class="hidden"><a href="javascript:">强者回归</a></li>

                        <li data-eid="qd_B47" data-tid="赚钱" class="hidden"><a href="javascript:">赚钱</a></li>

                        <li data-eid="qd_B47" data-tid="争霸流" class="hidden"><a href="javascript:">争霸流</a></li>

                        <li data-eid="qd_B47" data-tid="种田文" class="hidden"><a href="javascript:">种田文</a></li>

                        <li data-eid="qd_B47" data-tid="宅男" class="hidden"><a href="javascript:">宅男</a></li>

                        <li data-eid="qd_B47" data-tid="无限流" class="hidden"><a href="javascript:">无限流</a></li>

                        <li data-eid="qd_B47" data-tid="技术流" class="hidden"><a href="javascript:">技术流</a></li>

                        <li data-eid="qd_B47" data-tid="凡人流" class="hidden"><a href="javascript:">凡人流</a></li>

                        <li data-eid="qd_B47" data-tid="热血" class="hidden"><a href="javascript:">热血</a></li>

                        <li data-eid="qd_B47" data-tid="重生" class="hidden"><a href="javascript:">重生</a></li>

                        <li data-eid="qd_B47" data-tid="穿越" class="hidden"><a href="javascript:">穿越</a></li>

                    </ul>
                </div>
                <!-- end 作品标签 -->
            </div>
            <!-- end 条件筛选列表 -->
        </div>
        <!-- end 侧边栏筛选条件 -->
        <!-- start 全部作品内容区 -->
        <div class="main-content-wrap fl" data-l1="5">
            <!-- start 操作栏 -->
            <!--全部作品页、完本作品页、免费作品页列表上方操作栏 start-->

            <div class="tool-bar cf">
                <div class="view-mode" id="view-mode">
                    <a id="img-text" class="iconfont act" href="javascript:" data-eid="qd_B54"></a><em>|</em><a id="only-text" class="iconfont  " href="javascript:" data-eid="qd_B55"></a>
                </div>
                <div class="select-wrap">

                    <a data-id="" class="act" href="javascript:" data-eid="qd_B62">人气排序<cite class="iconfont"></cite></a>
                    <a data-id="6" href="javascript:" data-eid="qd_B49">完本时间</a>
                    <a data-id="11" href="javascript:" data-eid="qd_B80">总收藏</a>
                    <a data-id="3" href="javascript:" data-eid="qd_B52">总字数</a>
                    <div id="#vipClicks" class="lbf-combobox vipClicks"><a href="javascript:;" class="lbf-button lbf-combobox-label " data-value="0" hidefocus="true"><span class="lbf-combobox-caption">会员点击</span><span class="lbf-icon lbf-icon-down lbf-combobox-icon"></span></a></div>

                    <div id="#recomm" class="lbf-combobox recomm"><a href="javascript:;" class="lbf-button lbf-combobox-label " data-value="0" hidefocus="true"><span class="lbf-combobox-caption">推荐票</span><span class="lbf-icon lbf-icon-down lbf-combobox-icon"></span></a></div>
                    <em>|</em>
                                <span class="lbf-checkbox get-new-book" data-eid="qd_B53">
                                    <input style="position: absolute; opacity: 0;" id="only" type="checkbox">
                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="lbf-checkbox-helper"></ins></span>
                    <label for="only" data-eid="qd_B53">只看3个月内新书</label>
                    <div class="sort-count count-info" id="sort-count">
                        <div class="count-text">共<span>29703</span>本相关作品
                        </div>
                        <div class="yiwen" id="yiwen">
                            <div class="iconfont"></div>
                        </div>
                        <i>|</i>
                    </div>
                </div>
            </div>
            <!--全部作品页、完本作品页、免费作品页列表上方操作栏 end-->
            <!-- end 操作栏 -->
            <!-- start 全部作品列表 -->
            <!-- start 暂无数据 -->

            <div class="all-book-list">

                <div class="book-img-text">
                    <ul class="all-img-list cf">

                        <li data-rid="1">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1887208" data-bid="1887208" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_019.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1887208" target="_blank" data-eid="qd_B58" data-bid="1887208">全职高手</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4362593" data-eid="qd_B59" target="_blank">蝴蝶蓝</a><em>|</em><a href="http://youxi.qidian.com/" target="_blank" data-eid="qd_B60">游戏</a><i>·</i><a class="go-sub-type" data-typeid="7" data-subtypeid="76" href="javascript:" data-eid="qd_B61">游戏生涯</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    网游荣耀中被誉为教科书级别的顶尖高手，因为种种原因遭到俱乐部的驱逐，离开职业圈的他寄身于一家网吧成了一个小小的网管，但是，拥有十年游戏经验的他，在荣耀新开的第十区重新投入了游戏，带着对往昔的回忆，
                                </p>
                                <p class="update"><span>535.02万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="2">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3582993" data-bid="3582993" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_007.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3582993" target="_blank" data-eid="qd_B58" data-bid="3582993">弑天刃</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4362291" data-eid="qd_B59" target="_blank">小刀锋利</a><em>|</em><a href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_B60">玄幻</a><i>·</i><a class="go-sub-type" data-typeid="21" data-subtypeid="8" href="javascript:" data-eid="qd_B61">东方玄幻</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    江湖无道，拔刀而起，利刃横空，问心无愧。众生无道，刀锋弑之。冷眼星空，持刀睥睨。通天大道，一路荆棘，一刀斩开，唯我独尊！
                                </p>
                                <p class="update"><span>518.1万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="3">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1003539257" data-bid="1003539257" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_017.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1003539257" target="_blank" data-eid="qd_B58" data-bid="1003539257">征战五千年</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4169423" data-eid="qd_B59" target="_blank">维斯特帕列</a><em>|</em><a href="http://kehuan.qidian.com/" target="_blank" data-eid="qd_B60">科幻</a><i>·</i><a class="go-sub-type" data-typeid="9" data-subtypeid="251" href="javascript:" data-eid="qd_B61">时空穿梭</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    一枚神秘的虎符将李悠带到了异界，还给了他穿越时空召唤军队的能力；虎牢关下，李元霸锤打吕奉先；汴梁城外，戚家军大破金兀术；山海关前，皇太极疲于奔命......华夏春秋五千年，吾身不死，征
                                </p>
                                <p class="update"><span>196万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="4">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1923631" data-bid="1923631" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_010.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1923631" target="_blank" data-eid="qd_B58" data-bid="1923631">不靠谱大侠</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=1809488" data-eid="qd_B59" target="_blank">田十</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="12" href="javascript:" data-eid="qd_B61">都市生活</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    他曾在街边摆地摊，也曾是幸福里一哥；他是能让垃圾集中营的猴子们望风而逃的辣手扛霸子，也是小萝莉眼中内裤外穿的超人；他喝酒打架爆粗口，也有侠骨柔肠扶危济困；他曾穷
                                </p>
                                <p class="update"><span>309.45万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="5">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1003419567" data-bid="1003419567" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_002.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1003419567" target="_blank" data-eid="qd_B58" data-bid="1003419567">时光旅行者</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=3760041" data-eid="qd_B59" target="_blank">上善若无水</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="74" href="javascript:" data-eid="qd_B61">异术超能</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    穿梭时空，改变命运，梦幻现实，塑造传奇人生！PS:书友群499189519.
                                </p>
                                <p class="update"><span>244.48万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="6">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3498438" data-bid="3498438" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_015.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3498438" target="_blank" data-eid="qd_B58" data-bid="3498438">修真归来在都市</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4557168" data-eid="qd_B59" target="_blank">陌路行</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="74" href="javascript:" data-eid="qd_B61">异术超能</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    八十年前，尹修为了突破极限，追寻更高境界，踏上了前往遥远的星空彼岸的路途。八十年后，修为瓶颈，意识到心结未了的尹修又从星空彼岸的修真界回到了地球。然而，八十年光阴逝去，地球
                                </p>
                                <p class="update"><span>337万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="7">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3669163" data-bid="3669163" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_008.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3669163" target="_blank" data-eid="qd_B58" data-bid="3669163">全能运动员</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=5082025" data-eid="qd_B59" target="_blank">过关斩将</a><em>|</em><a href="http://tiyu.qidian.com/" target="_blank" data-eid="qd_B60">体育</a><i>·</i><a class="go-sub-type" data-typeid="8" data-subtypeid="55" href="javascript:" data-eid="qd_B61">体育赛事</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    田径、篮球、足球、网球……所有体育项目我全都精通。奥运会，那是我刷纪录的战场。我是世界上得到金牌最多的人，我是世界上获得冠军最多的人！我是一个全能运动员。我就是
                                </p>
                                <p class="update"><span>273.25万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="8">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3629877" data-bid="3629877" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3629877" target="_blank" data-eid="qd_B58" data-bid="3629877">游戏旅途</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=2945436" data-eid="qd_B59" target="_blank">路过的穿越者</a><em>|</em><a href="http://youxi.qidian.com/" target="_blank" data-eid="qd_B60">游戏</a><i>·</i><a class="go-sub-type" data-typeid="7" data-subtypeid="240" href="javascript:" data-eid="qd_B61">游戏异界</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    玩家眼中的游戏世界，和真人无异甚至比人还精的NPC，除了多个面板捎带手能升级外，这真的是游戏世界？俩眼一闭一睁突然换了地图，想要脱离游戏的外来者。路漫漫其修远兮，在这熟悉的
                                </p>
                                <p class="update"><span>338.21万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="9">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3017651" data-bid="3017651" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_012.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3017651" target="_blank" data-eid="qd_B58" data-bid="3017651">法师奥义</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=1922209" data-eid="qd_B59" target="_blank">月中阴</a><em>|</em><a href="http://qihuan.qidian.com/" target="_blank" data-eid="qd_B60">奇幻</a><i>·</i><a class="go-sub-type" data-typeid="1" data-subtypeid="62" href="javascript:" data-eid="qd_B61">剑与魔法</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    只要能够构建一个稳定的法术模型，任何人都可以成为法师！这就是法师的终极奥义！穿越成为贵族之子，带着前世的超级量子计算机，法术模型信手拈来……
                                </p>
                                <p class="update"><span>319.14万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="10">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1001359957" data-bid="1001359957" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_004.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1001359957" target="_blank" data-eid="qd_B58" data-bid="1001359957">读档九八</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=5234505" data-eid="qd_B59" target="_blank">三年不起</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="12" href="javascript:" data-eid="qd_B61">都市生活</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    杨帆读档了自己的人生，起始在九八年！那年房价还未启动F1模式……诺基亚还是王者，苹果正在黑夜……微软如日中天，雅虎最受热捧，日后巨无霸BAT两个没成立，一个还在筹备中……
                                </p>
                                <p class="update"><span>224.67万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="11">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1003481793" data-bid="1003481793" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_009.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1003481793" target="_blank" data-eid="qd_B58" data-bid="1003481793">武侠世界里的超级玩家</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=2920723" data-eid="qd_B59" target="_blank">想枕头的瞌睡</a><em>|</em><a href="http://youxi.qidian.com/" target="_blank" data-eid="qd_B60">游戏</a><i>·</i><a class="go-sub-type" data-typeid="7" data-subtypeid="240" href="javascript:" data-eid="qd_B61">游戏异界</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    一方武侠世界，一位穿越少年，神秘游戏系统，搅动江湖风云。医，可回生死，肉白骨。武，可斩万敌，破虚空。顶级武学、触之可学。当别人还在为领悟一门绝学而努
                                </p>
                                <p class="update"><span>180.53万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="12">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1003543850" data-bid="1003543850" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_006.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1003543850" target="_blank" data-eid="qd_B58" data-bid="1003543850">重生日本做监督</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4771314" data-eid="qd_B59" target="_blank">祈求者哀鸣</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="12" href="javascript:" data-eid="qd_B61">都市生活</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    有一种友情叫做《海贼王》，有一种恶搞叫做《银魂》，有一种救赎叫做《魔法少女小圆》，有一种牺牲叫做《叛逆的鲁路修》，有一种亲情叫做《CLANNAD》,有一种原则叫做《钢之炼金术师》，有一种教派叫做《
                                </p>
                                <p class="update"><span>134.37万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="13">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3473065" data-bid="3473065" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_014.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3473065" target="_blank" data-eid="qd_B58" data-bid="3473065">超级军工霸主</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4473369" data-eid="qd_B59" target="_blank">安溪柚</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="12" href="javascript:" data-eid="qd_B61">都市生活</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    军工是军队强大的基石，军工是国家强盛的保障，军工是民族不败的核心，卢嘉栋，一位总装备部军工技术专家，重生到1977年，来到一个地处西南的三线军工小厂。从此，卢嘉栋带领军工人挥汗如雨，踏上了一条改变
                                </p>
                                <p class="update"><span>310.72万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="14">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3347577" data-bid="3347577" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_005.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3347577" target="_blank" data-eid="qd_B58" data-bid="3347577">不死武尊</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4362417" data-eid="qd_B59" target="_blank">妖月夜</a><em>|</em><a href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_B60">玄幻</a><i>·</i><a class="go-sub-type" data-typeid="21" data-subtypeid="8" href="javascript:" data-eid="qd_B61">东方玄幻</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    【完本火书】一个落魄的少年偶得吞天神诀，可吞噬一切天地元气为己用，从此逆天破命，一雪前耻，凭借着神奇的生命武魂，他凝聚不死之身，横扫九天十地，雄霸天下！大家可以加老妖微信公众号，yaoyueye1
                                </p>
                                <p class="update"><span>612.39万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="15">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1003276162" data-bid="1003276162" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_018.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1003276162" target="_blank" data-eid="qd_B58" data-bid="1003276162">综艺娱乐之王</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4368424" data-eid="qd_B59" target="_blank">小伈</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="12" href="javascript:" data-eid="qd_B61">都市生活</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    平行世界没有杨安熟悉的综艺节目，《极限挑战》，《爸爸去哪儿》，《欢乐喜剧人》，《我是歌手》，《我们都爱笑》，《奔跑吧兄弟》……统统都没有！杨安笑了：“我要做综艺娱乐之王！我要当大明星！
                                </p>
                                <p class="update"><span>312.45万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="16">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3440796" data-bid="3440796" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_011.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3440796" target="_blank" data-eid="qd_B58" data-bid="3440796">帝级大明星</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4362515" data-eid="qd_B59" target="_blank">孓无我</a><em>|</em><a href="http://zhichang.qidian.com/" target="_blank" data-eid="qd_B60">职场</a><i>·</i><a class="go-sub-type" data-typeid="15" data-subtypeid="151" href="javascript:" data-eid="qd_B61">娱乐明星</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    他横扫了国内所有的艺坛奖项。他是第一个华人奥斯卡影帝。他的专辑销量拯救了音乐市场。他的演唱会能在欧美一票难求。他是世界艺坛公认的帝级大明星。
                                </p>
                                <p class="update"><span>508万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="17">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/3347395" data-bid="3347395" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_016.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/3347395" target="_blank" data-eid="qd_B58" data-bid="3347395">联盟之谁与争锋</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4224572" data-eid="qd_B59" target="_blank">乱</a><em>|</em><a href="http://youxi.qidian.com/" target="_blank" data-eid="qd_B60">游戏</a><i>·</i><a class="go-sub-type" data-typeid="7" data-subtypeid="7" href="javascript:" data-eid="qd_B61">电子竞技</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    当中国运动员嘲笑玩玩电子游戏也能拿冠军的时候，以电子竞技为生的你要做的是用自己42码的鞋子去量一量他那清高的脸码有多长！当父母、亲戚、朋友乃至这个社会都斜着眼睛看待电子竞技认为从事这行
                                </p>
                                <p class="update"><span>363.85万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="18">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1004080470" data-bid="1004080470" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_013.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1004080470" target="_blank" data-eid="qd_B58" data-bid="1004080470">重生乡村霸主</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4549926" data-eid="qd_B59" target="_blank">小陆探花</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="12" href="javascript:" data-eid="qd_B61">都市生活</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    重生到了91年的山村的张涛，身边突然多了一些神秘力量。看一个落后的山村如何在他手里成为一个蓝天，白云，青山，绿水，花海，落霞与万鸟齐飞的生态旅游圣地。这里生产的各种食材尽管
                                </p>
                                <p class="update"><span>167.89万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="19">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1003380951" data-bid="1003380951" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_003.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1003380951" target="_blank" data-eid="qd_B58" data-bid="1003380951">神话武林</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=3839976" data-eid="qd_B59" target="_blank">楚桥</a><em>|</em><a href="http://xianxia.qidian.com/" target="_blank" data-eid="qd_B60">仙侠</a><i>·</i><a class="go-sub-type" data-typeid="22" data-subtypeid="18" href="javascript:" data-eid="qd_B61">修真文明</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    北天王萧封一掌天倾，独孤剑魔剑分九州，王重阳遗蜕千年不腐，道门真君黄殇九生九死返老还童，无名老僧心有佛国无量净土，这是一个变异融合的仙武世界，掌握剧情的确是优势，但是若彻底相信剧情，那么必定十死无
                                </p>
                                <p class="update"><span>210.06万字</span>

                                </p>
                            </div>
                        </li>

                        <li data-rid="20">
                            <div class="book-img-box">
                                <a href="http://book.qidian.com/info/1042235" data-bid="1042235" data-eid="qd_B57" target="_blank"><img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/150_020.jpg"></a>
                            </div>
                            <div class="book-mid-info">
                                <h4><a href="http://book.qidian.com/info/1042235" target="_blank" data-eid="qd_B58" data-bid="1042235">很纯很暧昧</a></h4>
                                <p class="author">
                                    <img src="%E5%AE%8C%E6%9C%AC%E9%A2%91%E9%81%93_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/user.png"><a class="name" href="http://me.qidian.com/authorIndex.aspx?id=4362366" data-eid="qd_B59" target="_blank">鱼人二代</a><em>|</em><a href="http://dushi.qidian.com/" target="_blank" data-eid="qd_B60">都市</a><i>·</i><a class="go-sub-type" data-typeid="4" data-subtypeid="74" href="javascript:" data-eid="qd_B61">异术超能</a><em>|</em><span>完本</span>
                                </p>
                                <p class="intro">
                                    杨明是一名普通的学生，某一天，他收到一份礼物，一只神奇的眼镜，从此生活变得丰富多彩。（鱼宝宝书友1群333702438）
                                </p>
                                <p class="update"><span>681.2万字</span>

                                </p>
                            </div>
                        </li>

                    </ul>
                    <!-- 此处数据一共是10行，总共20本书-->
                </div>

                <!-- end 图文模式 -->
                <!-- start 文字表格模式 预先隐藏，切换时显示，隐藏图文模式 -->

                <!-- end 文字表格模式 -->
            </div>
            <!-- start 分页 -->
            <div class="page-box cf">
                <div class="pagination fr" data-eid="qd_C44" id="page-container" data-pagemax="1486" data-page="1"><div class="lbf-pagination"><ul class="lbf-pagination-item-list"><li class="lbf-pagination-item"><a href="javascript:;" class="lbf-pagination-prev lbf-pagination-disabled">&lt;</a></li><li class="lbf-pagination-item"><a data-page="1" href="javascript:;" class="lbf-pagination-page  lbf-pagination-current">1</a></li><li class="lbf-pagination-item"><a data-page="2" href="javascript:;" class="lbf-pagination-page  ">2</a></li><li class="lbf-pagination-item"><a data-page="3" href="javascript:;" class="lbf-pagination-page  ">3</a></li><li class="lbf-pagination-item"><a data-page="4" href="javascript:;" class="lbf-pagination-page  ">4</a></li><li class="lbf-pagination-item"><a data-page="5" href="javascript:;" class="lbf-pagination-page  ">5</a></li><li class="lbf-pagination-item"><span class="lbf-pagination-ellipsis">...</span></li><li class="lbf-pagination-item"><a data-page="1486" href="javascript:;" class="lbf-pagination-page  ">1486</a></li><li class="lbf-pagination-item"><a href="javascript:;" class="lbf-pagination-next ">&gt;</a></li></ul><div class="lbf-pagination-jump"><input class="lbf-pagination-input" value="1" type="text"><a href="javascript:;" class="lbf-pagination-go">GO</a></div></div></div>
            </div>
            <!-- end 分页 -->

            <!-- end 全部作品列表 -->
        </div>
        <!-- end 全部作品内容区 -->
    </div>
    <!-- end 全部作品容器 -->
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
    g_data.pageId = 'qd_P_fin';
    //当前查询的参数
    var params = {};
    params.typeId = '-1';
    params.subTypeId =  '-1';
    params.actionId =  '&#34;hidden&#34;';
    params.vipId =  '-1';
    params.sizeId = '-1';
    params.signId =  '-1';
    params.tagName =  '-1';
    params.orderId =  '&#34;&#34;';
    params.newIn3Month = '-1';
    params.showId = '1';
    params.updateId = '-1';
    g_data.params = params;
    //当前页面路由
    g_data.url = '//fin.qidian.com';
    // 域名环境变量
    g_data.domainSearch = 'se.qidian.com';
    //环境域名
    g_data.domainPreFix = '';
</script>
<script>
    LBF.use(['lib.jQuery', 'monitor.SpeedReport', 'qd/js/all_finish_free/common.0.72.js'], function ($, SpeedReport, Common) {

        // 页面逻辑入口
        new Common({});
        $(window).on('load.speedReport', function () {
            // speedTimer[onload]
            speedTimer.push(new Date().getTime());
            var f1 = 7718, // china reading limited's ID
                f2 = 219, // site ID
                f3 = 14; // page ID
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



<div style="position: absolute; display: none; max-height: 384px; z-index: 9999;" class="lbf-autocomplete-suggestions"></div><div style="width: 0px; min-width: 82px; height: auto;" class="lbf-popup lbf-dropdown vipClicks lbf-combobox-panel"><ul class="lbf-combobox-options"><li class="lbf-combobox-option"><a class="lbf-combobox-item" href="javascript:;" data-value="1">会员周点击</a></li><li class="lbf-combobox-option"><a class="lbf-combobox-item" href="javascript:;" data-value="7">会员月点击</a></li><li class="lbf-combobox-option"><a class="lbf-combobox-item" href="javascript:;" data-value="8">会员总点击</a></li></ul></div><div style="width: 0px; min-width: 70px; height: auto;" class="lbf-popup lbf-dropdown recomm lbf-combobox-panel"><ul class="lbf-combobox-options"><li class="lbf-combobox-option"><a class="lbf-combobox-item" href="javascript:;" data-value="9">周推荐票</a></li><li class="lbf-combobox-option"><a class="lbf-combobox-item" href="javascript:;" data-value="10">月推荐票</a></li><li class="lbf-combobox-option"><a class="lbf-combobox-item" href="javascript:;" data-value="2">总推荐票</a></li></ul></div></body></html>
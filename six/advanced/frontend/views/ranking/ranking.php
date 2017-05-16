<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title>人气榜单_起点中文网</title>
    <meta name="description" content="起点中文网小说排行榜提供最新、流行、经典、精品原创小说排行榜,涵盖:玄幻小说排行榜,奇幻小说排行榜,武侠小说排行榜,仙侠小说排行榜,都市小说排行榜,历史小说排行榜,军事小说排行榜,竞技小说排行榜,灵异小说排行榜,二次元小说排行榜,免费小说排行榜,新书排行榜,完本小说排行榜,粉丝打赏排行榜">
    <meta name="keywords" content="小说,人气榜单，排行榜,小说排行榜,热门小说排行榜,网络小说排行榜,经典小说排行,免费小说排行榜,精品小说推荐榜">
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

    <link rel="stylesheet" data-ignore="true" href="css/ranking/footer.css">











    <link href="css/ranking/Dropdown.css" rel="stylesheet" charset="utf-8"><link href="css/ranking/Autocomplete.css" rel="stylesheet" charset="utf-8"><link href="css/ranking/Popup.css" rel="stylesheet" charset="utf-8"></head>
<body>
<!-- start 通用body层 -->
<!-- start 微信分享小图标 -->
<div class="share-img">
    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/share.png" height="300" width="300">
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
                <a href="r=user/user" target="_blank" data-eid="qd_A14"><em class="iconfont shelf"></em><i>我的书架</i>
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
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vSG9tZS9QYy9JbmRleC9kZXRhaWwvZ2FtZWlkLzIwMDU0Mg==&amp;code=5733ed85f2cd0" target="_blank" data-eid="qd_A39"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_009.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A40" target="_blank">天命传说</a><i>策略RPG</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vSG9tZS9QYy9JbmRleC9kZXRhaWwvZ2FtZWlkLzIwMDUxNQ==&amp;code=5733edc4a3435" target="_blank" data-eid="qd_A40"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_004.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                            <dd>
                                <h3>

                                    <a href="" data-eid="qd_A41" target="_blank">我是大将军</a><i>策略RPG</i></h3>
                                <p><a href="http://collect.game.qidian.com/Home/Stat/Index?gourl=aHR0cDovL3N5LnFpZGlhbi5jb20vYXBpL3N5eHMvc2dhbWUvUGxheS5waHA/Z2FtZWlkPTIwMDUxMiZzZXJ2ZXJpZD0xJnR5PTE=&amp;code=5769f94031529" target="_blank" data-eid="qd_A41"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_003.jpg"><i class="op-tag"></i></a></p>
                            </dd>

                        </dl>
                        <div class="bottom">
                            <h4>新游上线|妖怪宝可萌</h4>
                            <p><a href="http://sy.qidian.com/api/syxs/sgame/Play.php?gameid=200549&amp;serverid=1&amp;ty=1&amp;qd_game_key=192x86&amp;qd_dd_p1=141" data-eid="qd_A42" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_008.jpg" alt=""><i class="op-tag"></i></a></p>
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
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/wldf" data-eid="qd_A31" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/dyjd" data-eid="qd_A32" target="_blank">第一舰队</a><strong>11区</strong></h3>
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/dyjd" data-eid="qd_A32" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_006.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=dtss" data-eid="qd_A33" target="_blank">大唐盛世</a><strong>14区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=dtss" data-eid="qd_A33" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_010.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-15</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=qyz" data-eid="qd_A34" target="_blank">青云志</a><strong>31区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=qyz" data-eid="qd_A34" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_002.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/lscq" data-eid="qd_A35" target="_blank">梁山传奇</a><strong>4区</strong></h3>
                                    <p><a href="http://act.yy.game.qidian.com/Ad/Cpl/index/mark/6e26ead8e11c36ab6aeb096c3b162f42/name/lscq" data-eid="qd_A35" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_011.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=zjzr" data-eid="qd_A36" target="_blank">最佳阵容</a><strong>12区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=zjzr" data-eid="qd_A36" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_007.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                                <dd>
                                    <h3>

                                        <span></span>

                                        <i>5-14</i><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=jyyx" data-eid="qd_A37" target="_blank">锦衣夜行</a><strong>27区</strong></h3>
                                    <p><a href="http://cpgame.qd.game.qidian.com/Home/GameServer/lists?name=jyyx" data-eid="qd_A37" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0_005.jpg"><i class="op-tag"></i></a></p>
                                </dd>

                            </dl>
                            <div class="bottom">
                                <h4>悬赏</h4>
                                <p><a href="http://xs.game.qidian.com/?qd_game_key=xs192x86&amp;qd_dd_p1=124" data-eid="qd_A38" target="_blank"><img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/0.gif"><span class="op-tag"></span></a></p>
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
    <div class="rank-box box-center cf">
        <!-- 设置 侧边栏高亮变量初始值 -->

        <!-- start 榜单列表导航-->
        <div class="rank-nav-list fl" data-l1="4">
            <ul>

                <li class="act"><a href="http://r.qidian.com/" data-eid="qd_C01">人气榜单</a><cite></cite></li>
            </ul>
            <p class="line"></p>
            <h4>热门作品排行</h4>
            <ul class="list_type_detective">
                <li class=""><a href="http://r.qidian.com/yuepiao?style=1" data-eid="qd_C02">原创风云榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/hotsales?style=1" data-eid="qd_C03">24小时热销榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/click?style=1" data-eid="qd_C04">会员点击榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/recom?style=1" data-eid="qd_C05">推荐票榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/collect?style=1" data-eid="qd_C06">收藏榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/vipup?style=1" data-eid="qd_C07">VIP更新榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/vipcollect?style=1" data-eid="qd_C08">VIP收藏榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/vipreward?style=1" data-eid="qd_C09">VIP精品打赏榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/fin?style=1" data-eid="qd_C10">完本榜</a><cite></cite></li>
            </ul>
            <p class="line"></p>
            <h4>新书排行</h4>
            <ul class="list_type_detective">
                <li class=""><a href="http://r.qidian.com/signnewbook?style=1" data-eid="qd_C11">签约作家新书榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/pubnewbook?style=1" data-eid="qd_C12">公众作者新书榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/newsign?style=1" data-eid="qd_C13">新人签约新书榜</a><cite></cite></li>
                <li class=""><a href="http://r.qidian.com/newauthor?style=1" data-eid="qd_C14">新人作者新书榜</a><cite></cite></li>
            </ul>
            <p class="line"></p>
            <h4>社区排行</h4>
            <ul>
                <li class=""><a href="http://r.qidian.com/fans" data-eid="qd_C15">打赏粉丝榜</a><cite></cite></li>
            </ul>
            <p class="line"></p>
            <h4>其他排行</h4>
            <ul>
                <li><a target="_blank" href="http://www.qdmm.com/MMWeb/TopTen.aspx" data-eid="qd_C16">女生精选榜</a></li>
                <li><a target="_blank" href="http://top.qdmm.com/MMWeb/TopDetail.aspx?TopType=7&amp;Time=1" data-eid="qd_C17">女生原创风云榜</a></li>
                <!--<li><a target="_blank" href="http://wwwploy.qdmm.com/MMWeb/PKList.aspx" data-eid="qd_C18">女生PK榜</a></li>-->
            </ul>
        </div>
        <!-- end 榜单列表导航-->
        <!-- start 榜单列表内容 -->
        <div class="main-content-wrap fl" data-l1="5">
            <!-- start rank 头部区域 -->

            <div class="rank-header">
                <h3 class="lang"><a class="link" href="http://wwwploy.qidian.com/HelpCenter/default.aspx?type=0&amp;categoryid=67&amp;parentid=13" data-eid="qd_C19" target="_blank">榜单规则</a>人气榜单<span><em>2017-05-15 19:06</em>更新</span></h3>
                <div class="type-list">
                    <p>
                        <a data-chanid="-1" class="act" href="javascript:" data-eid="qd_C20">全部分类</a><em>·</em>
                        <a data-chanid="21" class="" href="javascript:" data-eid="qd_C21">玄幻</a><em>·</em>
                        <a data-chanid="1" class="" href="javascript:" data-eid="qd_C22">奇幻</a><em>·</em>
                        <a data-chanid="2" class="" href="javascript:" data-eid="qd_C23">武侠</a><em>·</em>
                        <a data-chanid="22" class="" href="javascript:" data-eid="qd_C24">仙侠</a><em>·</em>
                        <a data-chanid="4" class="" href="javascript:" data-eid="qd_C25">都市</a><em>·</em>
                        <a data-chanid="15" class="" href="javascript:" data-eid="qd_C26">职场</a><em>·</em>
                        <a data-chanid="6" class="" href="javascript:" data-eid="qd_C27">军事</a><em>·</em>
                        <a data-chanid="5" class="" href="javascript:" data-eid="qd_C28">历史</a><em>·</em>
                        <a data-chanid="7" class="" href="javascript:" data-eid="qd_C29">游戏</a><em>·</em>
                        <a data-chanid="8" class="" href="javascript:" data-eid="qd_C30">体育</a><em>·</em>
                        <a data-chanid="9" class="" href="javascript:" data-eid="qd_C31">科幻</a><em>·</em>
                        <a data-chanid="10" class="" href="javascript:" data-eid="qd_C32">灵异</a><em>·</em>
                        <a data-chanid="12" class="" href="javascript:" data-eid="qd_C33">二次元</a>
                    </p>
                </div>
            </div>
            <!-- end rank头部区域 -->
            <!-- start 榜单区域 -->
            <div class="rank-body">
                <div class="rank-list-row cf mb20">
                    <!-- start 原创风云榜 -->
                    <div class="rank-list">
                        <h3 class="wrap-title lang">原创风云榜<i>·</i>新书<a class="more" href="http://r.qidian.com/yuepiao" data-eid="qd_C45">更多<em class="iconfont"></em></a>
                        </h3>
                        <div class="book-list">

                            <ul>
                                <li class="unfold" data-rid="1">
                                    <div class="book-wrap cf">
                                        <div class="book-info fl">
                                            <h3>NO.1</h3>
                                            <h4>
                                                <a href="http://book.qidian.com/info/1005238666" target="_blank" data-eid="qd_C40" data-bid="1005238666">万界天尊</a>
                                            </h4>
                                            <p class="digital"><em>16176</em>月票</p>
                                            <p class="author">
                                                <a class="type" href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_C42">玄幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362118" target="_blank" data-eid="qd_C41">血红</a>
                                            </p>
                                        </div>
                                        <div class="book-cover">
                                            <a class="link" href="http://book.qidian.com/info/1005238666" target="_blank" data-eid="qd_C39" data-bid="1005238666">
                                                <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_009.jpg">
                                            </a>
                                            <span></span>
                                        </div>
                                    </div>
                                </li>


                                <li data-rid="2">
                                    <div class="num-box"><span class="num2">2</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005399587" target="_blank" data-eid="qd_C40" data-bid="1005399587">宠物天王</a>

                                        <i class="total">8649</i>
                                    </div>
                                </li>

                                <li data-rid="3">
                                    <div class="num-box"><span class="num3">3</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005986941" target="_blank" data-eid="qd_C40" data-bid="1005986941">浴血兵魂</a>

                                        <i class="total">6844</i>
                                    </div>
                                </li>

                                <li data-rid="4">
                                    <div class="num-box"><span class="num4">4</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005405437" target="_blank" data-eid="qd_C40" data-bid="1005405437">老衲要还俗</a>

                                        <i class="total">5051</i>
                                    </div>
                                </li>

                                <li data-rid="5">
                                    <div class="num-box"><span class="num5">5</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005406434" target="_blank" data-eid="qd_C40" data-bid="1005406434">我的影子会挂机</a>

                                        <i class="total">3474</i>
                                    </div>
                                </li>

                                <li data-rid="6">
                                    <div class="num-box"><span class="num6">6</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005715972" target="_blank" data-eid="qd_C40" data-bid="1005715972">西游直播间</a>

                                        <i class="total">3301</i>
                                    </div>
                                </li>

                                <li data-rid="7">
                                    <div class="num-box"><span class="num7">7</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005403859" target="_blank" data-eid="qd_C40" data-bid="1005403859">直播之荒野挑战</a>

                                        <i class="total">3105</i>
                                    </div>
                                </li>

                                <li data-rid="8">
                                    <div class="num-box"><span class="num8">8</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005404594" target="_blank" data-eid="qd_C40" data-bid="1005404594">咸鱼翻身的正确姿势</a>

                                        <i class="total">3026</i>
                                    </div>
                                </li>

                                <li data-rid="9">
                                    <div class="num-box"><span class="num9">9</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005313284" target="_blank" data-eid="qd_C40" data-bid="1005313284">美食猎人</a>

                                        <i class="total">3000</i>
                                    </div>
                                </li>

                                <li data-rid="10">
                                    <div class="num-box"><span class="num10">10</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1005313386" target="_blank" data-eid="qd_C40" data-bid="1005313386">我是全能大明星</a>

                                        <i class="total">2779</i>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- end 原创风云榜 -->
                    <!-- start 24小时热销 -->
                    <div class="rank-list sort-list">
                        <h3 class="wrap-title lang">24小时热销榜<a class="more" href="http://r.qidian.com/hotsales" data-eid="qd_C46">更多<em class="iconfont"></em></a></h3>
                        <div class="book-list">

                            <ul>
                                <li class="unfold" data-rid="1">
                                    <div class="book-wrap cf">
                                        <div class="book-info fl">
                                            <h3>NO.1</h3>
                                            <h4>
                                                <a href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C40" data-bid="1004608738">圣墟</a></h4>
                                            <p class="digital f16">销量冠军</p>
                                            <p class="author">
                                                <a class="type" href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_C42">玄幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362453" target="_blank" data-eid="qd_C41">辰东</a>
                                            </p>
                                        </div>
                                        <div class="book-cover">
                                            <a class="link" href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C39" data-bid="1004608738">
                                                <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_004.jpg">
                                            </a>
                                            <span></span>
                                        </div>
                                    </div>
                                </li>

                                <li data-rid="2">
                                    <div class="num-box"><span class="num2">2</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1003354631" target="_blank" data-eid="qd_C40" data-bid="1003354631">一念永恒</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                                <li data-rid="3">
                                    <div class="num-box"><span class="num3">3</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/3347595" target="_blank" data-eid="qd_C40" data-bid="3347595">择天记</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                                <li data-rid="4">
                                    <div class="num-box"><span class="num4">4</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1887208" target="_blank" data-eid="qd_C40" data-bid="1887208">全职高手</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                                <li data-rid="5">
                                    <div class="num-box"><span class="num5">5</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/3602691" target="_blank" data-eid="qd_C40" data-bid="3602691">修真聊天群</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                                <li data-rid="6">
                                    <div class="num-box"><span class="num6">6</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/3548786" target="_blank" data-eid="qd_C40" data-bid="3548786">重生之都市修仙</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                                <li data-rid="7">
                                    <div class="num-box"><span class="num7">7</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1004185492" target="_blank" data-eid="qd_C40" data-bid="1004185492">带着仓库到大明</a>


                                        <span class="iconfont up"></span>

                                    </div>
                                </li>

                                <li data-rid="8">
                                    <div class="num-box"><span class="num8">8</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/3513193" target="_blank" data-eid="qd_C40" data-bid="3513193">雪鹰领主</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                                <li data-rid="9">
                                    <div class="num-box"><span class="num9">9</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/2750457" target="_blank" data-eid="qd_C40" data-bid="2750457">大主宰</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                                <li data-rid="10">
                                    <div class="num-box"><span class="num10">10</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1003307568" target="_blank" data-eid="qd_C40" data-bid="1003307568">不朽凡人</a>


                                        <span class="iconfont"></span>

                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- end 24小时热销 -->
                    <!-- start 会员点击榜 -->
                    <div class="rank-list">
                        <div class="tab-title">
                            <div class="tab-wrap"><a class="act" href="javascript:" data-eid="qd_C48">周</a><em>·</em><a href="javascript:" data-eid="qd_C49">月</a><em>·</em><a href="javascript:" data-eid="qd_C50">总</a></div>
                            <h3 class="wrap-title lang">会员点击榜<a class="more" href="http://r.qidian.com/click" data-eid="qd_C47">更多<em class="iconfont"></em></a></h3>
                        </div>
                        <div class="tab-list">
                            <!-- 周 -->
                            <div class="book-list">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/1005207298" target="_blank" data-eid="qd_C40" data-bid="1005207298">金牌主持</a></h4>
                                                <p class="digital"><em>7556</em>点击</p>
                                                <p class="author">
                                                    <a class="type" href="http://dushi.qidian.com/" target="_blank" data-eid="qd_C42">都市</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362920" target="_blank" data-eid="qd_C41">奥比椰</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/1005207298" target="_blank" data-eid="qd_C39" data-bid="1005207298">
                                                    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_005.jpg">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>


                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1005794784" target="_blank" data-eid="qd_C40" data-bid="1005794784">全能修炼至尊</a>
                                            <i class="total">7463</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003899336" target="_blank" data-eid="qd_C40" data-bid="1003899336">最强装逼打脸系统</a>
                                            <i class="total">6581</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003723851" target="_blank" data-eid="qd_C40" data-bid="1003723851">天影</a>
                                            <i class="total">6489</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1004974688" target="_blank" data-eid="qd_C40" data-bid="1004974688">盗天仙途</a>
                                            <i class="total">6372</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1005377638" target="_blank" data-eid="qd_C40" data-bid="1005377638">江湖末世行</a>
                                            <i class="total">6285</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003578885" target="_blank" data-eid="qd_C40" data-bid="1003578885">超凡传</a>
                                            <i class="total">6227</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003277353" target="_blank" data-eid="qd_C40" data-bid="1003277353">穿入异世的道德经</a>
                                            <i class="total">6217</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1007337095" target="_blank" data-eid="qd_C40" data-bid="1007337095">老板</a>
                                            <i class="total">6148</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1004593456" target="_blank" data-eid="qd_C40" data-bid="1004593456">女仆军团</a>
                                            <i class="total">6066</i>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                            <!-- 月 -->
                            <div class="book-list hidden">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/1006799368" target="_blank" data-eid="qd_C40" data-bid="1006799368">最强基因</a></h4>
                                                <p class="digital"><em>152536</em>点击</p>
                                                <p class="author">
                                                    <a class="type" href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_C42">玄幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=3673539" target="_blank" data-eid="qd_C41">零下九十度</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/1006799368" target="_blank" data-eid="qd_C39" data-bid="1006799368">
                                                    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_007.jpg">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1005207298" target="_blank" data-eid="qd_C40" data-bid="1005207298">金牌主持</a>

                                            <i class="total">148494</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1005794784" target="_blank" data-eid="qd_C40" data-bid="1005794784">全能修炼至尊</a>

                                            <i class="total">131237</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003723851" target="_blank" data-eid="qd_C40" data-bid="1003723851">天影</a>

                                            <i class="total">130062</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1004974688" target="_blank" data-eid="qd_C40" data-bid="1004974688">盗天仙途</a>

                                            <i class="total">129392</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1004589102" target="_blank" data-eid="qd_C40" data-bid="1004589102">都市最强装逼系统</a>

                                            <i class="total">125816</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1005781856" target="_blank" data-eid="qd_C40" data-bid="1005781856">我知道的太多了</a>

                                            <i class="total">125690</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003578885" target="_blank" data-eid="qd_C40" data-bid="1003578885">超凡传</a>

                                            <i class="total">120167</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1007337095" target="_blank" data-eid="qd_C40" data-bid="1007337095">老板</a>

                                            <i class="total">103245</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003429156" target="_blank" data-eid="qd_C40" data-bid="1003429156">独步天途</a>

                                            <i class="total">103106</i>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                            <!-- 总 -->
                            <div class="book-list hidden">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/1639199" target="_blank" data-eid="qd_C40" data-bid="1639199">吞噬星空</a></h4>
                                                <p class="digital"><em>11258871</em>点击</p>
                                                <p class="author">
                                                    <a class="type" href="http://kehuan.qidian.com/" target="_blank" data-eid="qd_C42">科幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362096" target="_blank" data-eid="qd_C41">我吃西红柿</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/1639199" target="_blank" data-eid="qd_C39" data-bid="1639199">
                                                    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90.jpg">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>


                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1735921" target="_blank" data-eid="qd_C40" data-bid="1735921">遮天</a>

                                            <i class="total">6531539</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1209977" target="_blank" data-eid="qd_C40" data-bid="1209977">斗破苍穹</a>

                                            <i class="total">5664190</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2048120" target="_blank" data-eid="qd_C40" data-bid="2048120">武动乾坤</a>

                                            <i class="total">5395156</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3106580" target="_blank" data-eid="qd_C40" data-bid="3106580">我欲封天</a>

                                            <i class="total">4280369</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/107580" target="_blank" data-eid="qd_C40" data-bid="107580">凡人修仙传</a>

                                            <i class="total">4254948</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2083259" target="_blank" data-eid="qd_C40" data-bid="2083259">将夜</a>

                                            <i class="total">4194847</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2502372" target="_blank" data-eid="qd_C40" data-bid="2502372">莽荒纪</a>

                                            <i class="total">4042999</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1777445" target="_blank" data-eid="qd_C40" data-bid="1777445">天珠变</a>

                                            <i class="total">3773476</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1979049" target="_blank" data-eid="qd_C40" data-bid="1979049">赘婿</a>

                                            <i class="total">3714652</i>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- end 会员点击榜 -->
                    <!-- start 推荐票榜 -->
                    <div class="rank-list mr0">
                        <div class="tab-title">
                            <div class="tab-wrap"><a class="act" href="javascript:" data-eid="qd_C52">周</a><em>·</em><a href="javascript:" data-eid="qd_C53">月</a><em>·</em><a href="javascript:" data-eid="qd_C54">总</a></div>
                            <h3 class="wrap-title lang">推荐票榜<a class="more" href="http://r.qidian.com/recom" data-eid="qd_C51">更多<em class="iconfont"></em></a></h3>
                        </div>
                        <div class="tab-list">
                            <!-- 周 -->
                            <div class="book-list">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C40" data-bid="1004608738">圣墟</a></h4>
                                                <p class="digital"><em>36075</em>推荐票</p>
                                                <p class="author">
                                                    <a class="type" href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_C42">玄幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362453" target="_blank" data-eid="qd_C41">辰东</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C39" data-bid="1004608738">
                                                    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_004.jpg">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003354631" target="_blank" data-eid="qd_C40" data-bid="1003354631">一念永恒</a>

                                            <i class="total">27267</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003694333" target="_blank" data-eid="qd_C40" data-bid="1003694333">斗战狂潮</a>

                                            <i class="total">22217</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3638453" target="_blank" data-eid="qd_C40" data-bid="3638453">五行天</a>

                                            <i class="total">16072</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3513193" target="_blank" data-eid="qd_C40" data-bid="3513193">雪鹰领主</a>

                                            <i class="total">15149</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1005238666" target="_blank" data-eid="qd_C40" data-bid="1005238666">万界天尊</a>

                                            <i class="total">14338</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003723851" target="_blank" data-eid="qd_C40" data-bid="1003723851">天影</a>

                                            <i class="total">14202</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2371777" target="_blank" data-eid="qd_C40" data-bid="2371777">剑逆苍穹</a>

                                            <i class="total">13117</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1004142144" target="_blank" data-eid="qd_C40" data-bid="1004142144">武道宗师</a>

                                            <i class="total">12913</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003683523" target="_blank" data-eid="qd_C40" data-bid="1003683523">最后一个使徒</a>

                                            <i class="total">12707</i>
                                        </div>
                                    </li>


                                </ul>

                            </div>
                            <!-- 月 -->
                            <div class="book-list hidden">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C40" data-bid="1004608738">圣墟</a></h4>
                                                <p class="digital"><em>671753</em>推荐票</p>
                                                <p class="author">
                                                    <a class="type" href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_C42">玄幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362453" target="_blank" data-eid="qd_C41">辰东</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C39" data-bid="1004608738">
                                                    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/180_002.jpg">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003354631" target="_blank" data-eid="qd_C40" data-bid="1003354631">一念永恒</a>

                                            <i class="total">491835</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003694333" target="_blank" data-eid="qd_C40" data-bid="1003694333">斗战狂潮</a>

                                            <i class="total">487345</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003723851" target="_blank" data-eid="qd_C40" data-bid="1003723851">天影</a>

                                            <i class="total">335716</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3638453" target="_blank" data-eid="qd_C40" data-bid="3638453">五行天</a>

                                            <i class="total">309338</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1005238666" target="_blank" data-eid="qd_C40" data-bid="1005238666">万界天尊</a>

                                            <i class="total">305982</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003683523" target="_blank" data-eid="qd_C40" data-bid="1003683523">最后一个使徒</a>

                                            <i class="total">283604</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2371777" target="_blank" data-eid="qd_C40" data-bid="2371777">剑逆苍穹</a>

                                            <i class="total">283198</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003578885" target="_blank" data-eid="qd_C40" data-bid="1003578885">超凡传</a>

                                            <i class="total">273790</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3347598" target="_blank" data-eid="qd_C40" data-bid="3347598">我真是大明星</a>

                                            <i class="total">262147</i>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                            <!-- 总 -->
                            <div class="book-list hidden">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/107580" target="_blank" data-eid="qd_C40" data-bid="107580">凡人修仙传</a></h4>
                                                <p class="digital"><em>13533608</em>推荐票</p>
                                                <p class="author">
                                                    <a class="type" href="http://xianxia.qidian.com/" target="_blank" data-eid="qd_C42">仙侠</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362771" target="_blank" data-eid="qd_C41">忘语</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/107580" target="_blank" data-eid="qd_C39" data-bid="107580">
                                                    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/180.jpg">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/22919" target="_blank" data-eid="qd_C40" data-bid="22919">从零开始</a>

                                            <i class="total">13350661</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003354631" target="_blank" data-eid="qd_C40" data-bid="1003354631">一念永恒</a>

                                            <i class="total">9420037</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C40" data-bid="1004608738">圣墟</a>

                                            <i class="total">8459786</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3347598" target="_blank" data-eid="qd_C40" data-bid="3347598">我真是大明星</a>

                                            <i class="total">7982504</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3513193" target="_blank" data-eid="qd_C40" data-bid="3513193">雪鹰领主</a>

                                            <i class="total">7967286</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003694333" target="_blank" data-eid="qd_C40" data-bid="1003694333">斗战狂潮</a>

                                            <i class="total">7878831</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3638453" target="_blank" data-eid="qd_C40" data-bid="3638453">五行天</a>

                                            <i class="total">7726348</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1017141" target="_blank" data-eid="qd_C40" data-bid="1017141">盘龙</a>

                                            <i class="total">7720335</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1639199" target="_blank" data-eid="qd_C40" data-bid="1639199">吞噬星空</a>

                                            <i class="total">7472102</i>
                                        </div>
                                    </li>


                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- end 推荐票榜 -->
                    <!-- start 收藏榜 -->
                    <div class="rank-list">
                        <h3 class="wrap-title lang">收藏榜<a class="more" href="http://r.qidian.com/collect" data-eid="qd_C55">更多<em class="iconfont"></em></a></h3>
                        <div class="book-list">

                            <ul>
                                <li class="unfold" data-rid="1">
                                    <div class="book-wrap cf">
                                        <div class="book-info fl">
                                            <h3>NO.1</h3>
                                            <h4>
                                                <a href="http://book.qidian.com/info/3676417" target="_blank" data-eid="qd_C40" data-bid="3676417">玄界之门</a></h4>
                                            <p class="digital"><em>2288880</em>收藏数</p>
                                            <p class="author">
                                                <a class="type" href="http://xianxia.qidian.com/" target="_blank" data-eid="qd_C42">仙侠</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362771" target="_blank" data-eid="qd_C41">忘语</a>
                                            </p>
                                        </div>
                                        <div class="book-cover">
                                            <a class="link" href="http://book.qidian.com/info/3676417" target="_blank" data-eid="qd_C39" data-bid="3676417">
                                                <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_002.jpg">
                                            </a>
                                            <span></span>
                                        </div>
                                    </div>
                                </li>


                                <li data-rid="2">
                                    <div class="num-box"><span class="num2">2</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1003354631" target="_blank" data-eid="qd_C40" data-bid="1003354631">一念永恒</a>

                                        <i class="total">2225662</i>
                                    </div>
                                </li>

                                <li data-rid="3">
                                    <div class="num-box"><span class="num3">3</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/3347598" target="_blank" data-eid="qd_C40" data-bid="3347598">我真是大明星</a>

                                        <i class="total">1557056</i>
                                    </div>
                                </li>

                                <li data-rid="4">
                                    <div class="num-box"><span class="num4">4</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/2750457" target="_blank" data-eid="qd_C40" data-bid="2750457">大主宰</a>

                                        <i class="total">1500376</i>
                                    </div>
                                </li>

                                <li data-rid="5">
                                    <div class="num-box"><span class="num5">5</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1209977" target="_blank" data-eid="qd_C40" data-bid="1209977">斗破苍穹</a>

                                        <i class="total">1484904</i>
                                    </div>
                                </li>

                                <li data-rid="6">
                                    <div class="num-box"><span class="num6">6</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1003307568" target="_blank" data-eid="qd_C40" data-bid="1003307568">不朽凡人</a>

                                        <i class="total">1256240</i>
                                    </div>
                                </li>

                                <li data-rid="7">
                                    <div class="num-box"><span class="num7">7</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/3513193" target="_blank" data-eid="qd_C40" data-bid="3513193">雪鹰领主</a>

                                        <i class="total">1215880</i>
                                    </div>
                                </li>

                                <li data-rid="8">
                                    <div class="num-box"><span class="num8">8</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/2952453" target="_blank" data-eid="qd_C40" data-bid="2952453">完美世界</a>

                                        <i class="total">1203571</i>
                                    </div>
                                </li>

                                <li data-rid="9">
                                    <div class="num-box"><span class="num9">9</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1004608738" target="_blank" data-eid="qd_C40" data-bid="1004608738">圣墟</a>

                                        <i class="total">1170671</i>
                                    </div>
                                </li>

                                <li data-rid="10">
                                    <div class="num-box"><span class="num10">10</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/173050" target="_blank" data-eid="qd_C40" data-bid="173050">琴帝</a>

                                        <i class="total">1167044</i>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- end 收藏榜 -->
                    <!-- start 完本榜 -->
                    <div class="rank-list">
                        <div class="tab-title">
                            <div class="tab-wrap"><a class="act" href="javascript:" data-eid="qd_C57">周</a><em>·</em><a href="javascript:" data-eid="qd_C58">月</a><em>·</em><a href="javascript:" data-eid="qd_C59">总</a></div>
                            <h3 class="wrap-title lang">完本榜<a class="more" href="http://r.qidian.com/fin" data-eid="qd_C56">更多<em class="iconfont"></em></a></h3>
                        </div>
                        <div class="tab-list">
                            <!-- 周 -->
                            <div class="book-list">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/3200554" target="_blank" data-eid="qd_C40" data-bid="3200554">儒术</a></h4>
                                                <p class="digital"><em>5542</em>点击</p>
                                                <p class="author">
                                                    <a class="type" href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_C42">玄幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=3955424" target="_blank" data-eid="qd_C41">端木赐</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/3200554" target="_blank" data-eid="qd_C39" data-bid="3200554">
                                                    <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_003.jpg">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>


                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1887208" target="_blank" data-eid="qd_C40" data-bid="1887208">全职高手</a>

                                            <i class="total">346</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3582993" target="_blank" data-eid="qd_C40" data-bid="3582993">弑天刃</a>

                                            <i class="total">252</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2371777" target="_blank" data-eid="qd_C40" data-bid="2371777">剑逆苍穹</a>

                                            <i class="total">226</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1001359957" target="_blank" data-eid="qd_C40" data-bid="1001359957">读档九八</a>

                                            <i class="total">209</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2413595" target="_blank" data-eid="qd_C40" data-bid="2413595">唐砖</a>

                                            <i class="total">206</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2632089" target="_blank" data-eid="qd_C40" data-bid="2632089">重生在白蛇的世界里</a>

                                            <i class="total">169</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3440796" target="_blank" data-eid="qd_C40" data-bid="3440796">帝级大明星</a>

                                            <i class="total">159</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3458639" target="_blank" data-eid="qd_C40" data-bid="3458639">人道至尊</a>

                                            <i class="total">148</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3498438" target="_blank" data-eid="qd_C40" data-bid="3498438">修真归来在都市</a>

                                            <i class="total">131</i>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                            <!-- 月 -->
                            <div class="book-list hidden">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/1887208" target="_blank" data-eid="qd_C40" data-bid="1887208">全职高手</a></h4>
                                                <p class="digital"><em>7351</em>点击</p>
                                                <p class="author">
                                                    <a class="type" href="http://youxi.qidian.com/" target="_blank" data-eid="qd_C42">游戏</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362593" target="_blank" data-eid="qd_C41">蝴蝶蓝</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/1887208" target="_blank" data-eid="qd_C39" data-bid="1887208">
                                                    <img src="">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>


                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3200554" target="_blank" data-eid="qd_C40" data-bid="3200554">儒术</a>

                                            <i class="total">7260</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2371777" target="_blank" data-eid="qd_C40" data-bid="2371777">剑逆苍穹</a>

                                            <i class="total">5344</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3440796" target="_blank" data-eid="qd_C40" data-bid="3440796">帝级大明星</a>

                                            <i class="total">3834</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1001359957" target="_blank" data-eid="qd_C40" data-bid="1001359957">读档九八</a>

                                            <i class="total">3647</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003419567" target="_blank" data-eid="qd_C40" data-bid="1003419567">时光旅行者</a>

                                            <i class="total">3344</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003539257" target="_blank" data-eid="qd_C40" data-bid="1003539257">征战五千年</a>

                                            <i class="total">3232</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/3458639" target="_blank" data-eid="qd_C40" data-bid="3458639">人道至尊</a>

                                            <i class="total">3157</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2413595" target="_blank" data-eid="qd_C40" data-bid="2413595">唐砖</a>

                                            <i class="total">3134</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1003276162" target="_blank" data-eid="qd_C40" data-bid="1003276162">综艺娱乐之王</a>

                                            <i class="total">2653</i>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                            <!-- 总 -->
                            <div class="book-list hidden">

                                <ul>
                                    <li class="unfold" data-rid="1">
                                        <div class="book-wrap cf">
                                            <div class="book-info fl">
                                                <h3>NO.1</h3>
                                                <h4>
                                                    <a href="http://book.qidian.com/info/1639199" target="_blank" data-eid="qd_C40" data-bid="1639199">吞噬星空</a></h4>
                                                <p class="digital"><em>11258871</em>点击</p>
                                                <p class="author">
                                                    <a class="type" href="http://kehuan.qidian.com/" target="_blank" data-eid="qd_C42">科幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=4362096" target="_blank" data-eid="qd_C41">我吃西红柿</a>
                                                </p>
                                            </div>
                                            <div class="book-cover">
                                                <a class="link" href="http://book.qidian.com/info/1639199" target="_blank" data-eid="qd_C39" data-bid="1639199">
                                                    <img src="">
                                                </a>
                                                <span></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li data-rid="2">
                                        <div class="num-box"><span class="num2">2</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1735921" target="_blank" data-eid="qd_C40" data-bid="1735921">遮天</a>

                                            <i class="total">6531539</i>
                                        </div>
                                    </li>

                                    <li data-rid="3">
                                        <div class="num-box"><span class="num3">3</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2048120" target="_blank" data-eid="qd_C40" data-bid="2048120">武动乾坤</a>

                                            <i class="total">5395156</i>
                                        </div>
                                    </li>

                                    <li data-rid="4">
                                        <div class="num-box"><span class="num4">4</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2083259" target="_blank" data-eid="qd_C40" data-bid="2083259">将夜</a>

                                            <i class="total">4194847</i>
                                        </div>
                                    </li>

                                    <li data-rid="5">
                                        <div class="num-box"><span class="num5">5</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2502372" target="_blank" data-eid="qd_C40" data-bid="2502372">莽荒纪</a>

                                            <i class="total">4042999</i>
                                        </div>
                                    </li>

                                    <li data-rid="6">
                                        <div class="num-box"><span class="num6">6</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1693876" target="_blank" data-eid="qd_C40" data-bid="1693876">重生之贼行天下</a>

                                            <i class="total">3881352</i>
                                        </div>
                                    </li>

                                    <li data-rid="7">
                                        <div class="num-box"><span class="num7">7</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1777445" target="_blank" data-eid="qd_C40" data-bid="1777445">天珠变</a>

                                            <i class="total">3773476</i>
                                        </div>
                                    </li>

                                    <li data-rid="8">
                                        <div class="num-box"><span class="num8">8</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1264634" target="_blank" data-eid="qd_C40" data-bid="1264634">仙逆</a>

                                            <i class="total">3635557</i>
                                        </div>
                                    </li>

                                    <li data-rid="9">
                                        <div class="num-box"><span class="num9">9</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/2952453" target="_blank" data-eid="qd_C40" data-bid="2952453">完美世界</a>

                                            <i class="total">3282640</i>
                                        </div>
                                    </li>

                                    <li data-rid="10">
                                        <div class="num-box"><span class="num10">10</span></div>
                                        <div class="name-box">

                                            <a class="name" href="http://book.qidian.com/info/1887208" target="_blank" data-eid="qd_C40" data-bid="1887208">全职高手</a>

                                            <i class="total">3247508</i>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <!-- end 完本榜 -->
                    <!-- start 签约作家新书榜 -->
                    <div class="rank-list">
                        <h3 class="wrap-title lang">签约作家新书榜<a class="more" href="http://r.qidian.com/signnewbook" data-eid="qd_C60">更多<em class="iconfont"></em></a></h3>
                        <div class="book-list">

                            <ul>
                                <li class="unfold" data-rid="1">
                                    <div class="book-wrap cf">
                                        <div class="book-info fl">
                                            <h3>NO.1</h3>
                                            <h4>
                                                <a href="http://book.qidian.com/info/1008984041" target="_blank" data-eid="qd_C40" data-bid="1008984041">一品道门</a></h4>
                                            <p class="digital"><em>73312</em>潜力值</p>
                                            <p class="author">
                                                <a class="type" href="http://xianxia.qidian.com/" target="_blank" data-eid="qd_C42">仙侠</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=3553718" target="_blank" data-eid="qd_C41">第九天命</a>
                                            </p>
                                        </div>
                                        <div class="book-cover">
                                            <a class="link" href="http://book.qidian.com/info/1008984041" target="_blank" data-eid="qd_C39" data-bid="1008984041">
                                                <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_006.jpg">
                                            </a>
                                            <span></span>
                                        </div>
                                    </div>
                                </li>

                                <li data-rid="2">
                                    <div class="num-box"><span class="num2">2</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009272025" target="_blank" data-eid="qd_C40" data-bid="1009272025">重生之娱乐修仙</a>

                                        <i class="total">60057</i>
                                    </div>
                                </li>

                                <li data-rid="3">
                                    <div class="num-box"><span class="num3">3</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009231278" target="_blank" data-eid="qd_C40" data-bid="1009231278">逆明小兵传奇</a>

                                        <i class="total">55954</i>
                                    </div>
                                </li>

                                <li data-rid="4">
                                    <div class="num-box"><span class="num4">4</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009279724" target="_blank" data-eid="qd_C40" data-bid="1009279724">重启九六</a>

                                        <i class="total">54353</i>
                                    </div>
                                </li>

                                <li data-rid="5">
                                    <div class="num-box"><span class="num5">5</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1006853204" target="_blank" data-eid="qd_C40" data-bid="1006853204">文化入侵异世界</a>

                                        <i class="total">52920</i>
                                    </div>
                                </li>

                                <li data-rid="6">
                                    <div class="num-box"><span class="num6">6</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009265821" target="_blank" data-eid="qd_C40" data-bid="1009265821">无疆</a>

                                        <i class="total">42707</i>
                                    </div>
                                </li>

                                <li data-rid="7">
                                    <div class="num-box"><span class="num7">7</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009331880" target="_blank" data-eid="qd_C40" data-bid="1009331880">我在天庭作死的日子</a>

                                        <i class="total">40662</i>
                                    </div>
                                </li>

                                <li data-rid="8">
                                    <div class="num-box"><span class="num8">8</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1007386189" target="_blank" data-eid="qd_C40" data-bid="1007386189">主神的黑店</a>

                                        <i class="total">36487</i>
                                    </div>
                                </li>

                                <li data-rid="9">
                                    <div class="num-box"><span class="num9">9</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009265750" target="_blank" data-eid="qd_C40" data-bid="1009265750">教练万岁</a>

                                        <i class="total">28455</i>
                                    </div>
                                </li>

                                <li data-rid="10">
                                    <div class="num-box"><span class="num10">10</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009407826" target="_blank" data-eid="qd_C40" data-bid="1009407826">回溯事务所</a>

                                        <i class="total">25419</i>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- end 签约作家新书榜 -->
                    <!-- start 公众作家新书榜 -->
                    <div class="rank-list mr0">
                        <h3 class="wrap-title lang">公众作家新书榜<a class="more" href="http://r.qidian.com/pubnewbook" data-eid="qd_C61">更多<em class="iconfont"></em></a></h3>
                        <div class="book-list">

                            <ul>
                                <li class="unfold" data-rid="1">
                                    <div class="book-wrap cf">
                                        <div class="book-info fl">
                                            <h3>NO.1</h3>
                                            <h4>
                                                <a href="http://book.qidian.com/info/1009346150" target="_blank" data-eid="qd_C40" data-bid="1009346150">异世界宠物大师</a></h4>
                                            <p class="digital"><em>13602</em>潜力值</p>
                                            <p class="author">
                                                <a class="type" href="http://xuanhuan.qidian.com/" target="_blank" data-eid="qd_C42">玄幻</a><i>·</i><a class="writer" href="http://me.qidian.com/authorIndex.aspx?id=12051299" target="_blank" data-eid="qd_C41">美女在哪</a>
                                            </p>
                                        </div>
                                        <div class="book-cover">
                                            <a class="link" href="http://book.qidian.com/info/1009346150" target="_blank" data-eid="qd_C39" data-bid="1009346150">
                                                <img src="%E6%8E%92%E8%A1%8C_%E8%B5%B7%E7%82%B9%E4%B8%AD%E6%96%87%E7%BD%91_files/90_008.jpg">
                                            </a>
                                            <span></span>
                                        </div>
                                    </div>
                                </li>

                                <li data-rid="2">
                                    <div class="num-box"><span class="num2">2</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009311001" target="_blank" data-eid="qd_C40" data-bid="1009311001">少年高手老司机</a>

                                        <i class="total">10659</i>
                                    </div>
                                </li>

                                <li data-rid="3">
                                    <div class="num-box"><span class="num3">3</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009354056" target="_blank" data-eid="qd_C40" data-bid="1009354056">第一神器</a>

                                        <i class="total">8042</i>
                                    </div>
                                </li>

                                <li data-rid="4">
                                    <div class="num-box"><span class="num4">4</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1008874959" target="_blank" data-eid="qd_C40" data-bid="1008874959">火影之五更琉璃</a>

                                        <i class="total">7523</i>
                                    </div>
                                </li>

                                <li data-rid="5">
                                    <div class="num-box"><span class="num5">5</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009333597" target="_blank" data-eid="qd_C40" data-bid="1009333597">星际铲屎官</a>

                                        <i class="total">7387</i>
                                    </div>
                                </li>

                                <li data-rid="6">
                                    <div class="num-box"><span class="num6">6</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009382031" target="_blank" data-eid="qd_C40" data-bid="1009382031">圣武楚天</a>

                                        <i class="total">6690</i>
                                    </div>
                                </li>

                                <li data-rid="7">
                                    <div class="num-box"><span class="num7">7</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009392110" target="_blank" data-eid="qd_C40" data-bid="1009392110">灵宠天王</a>

                                        <i class="total">6191</i>
                                    </div>
                                </li>

                                <li data-rid="8">
                                    <div class="num-box"><span class="num8">8</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009383512" target="_blank" data-eid="qd_C40" data-bid="1009383512">最后的曙光城</a>

                                        <i class="total">5709</i>
                                    </div>
                                </li>

                                <li data-rid="9">
                                    <div class="num-box"><span class="num9">9</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1009304855" target="_blank" data-eid="qd_C40" data-bid="1009304855">旧日篇章</a>

                                        <i class="total">2972</i>
                                    </div>
                                </li>

                                <li data-rid="10">
                                    <div class="num-box"><span class="num10">10</span></div>
                                    <div class="name-box">

                                        <a class="name" href="http://book.qidian.com/info/1007736377" target="_blank" data-eid="qd_C40" data-bid="1007736377">穿越超能者</a>

                                        <i class="total">2731</i>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- end 公众作家新书榜 -->
                </div>
            </div>
            <!-- end 榜单区域 -->
        </div>
    </div>
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
    g_data.pageId = 'qd_P_rank_01';
    //环境域名
    g_data.domainPreFix = '';
    g_data.domainSearch = 'se.qidian.com';
</script>
<script>
    LBF.use(['lib.jQuery', 'monitor.SpeedReport', 'qd/js/rank/index.0.67.js'], function ($, SpeedReport, Index) {

        // 页面逻辑入口
        new Index({});
        $(window).on('load.speedReport', function () {
            // speedTimer[onload]
            speedTimer.push(new Date().getTime());
            var f1 = 7718, // china reading limited's ID
                f2 = 219, // site ID
                f3 = 15; // page ID
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
Theme-Banri
===========

一款Typecho主题  
简单轻盈，不包含任何图片，适合个人博客，也是我的自用主题  
很久前的作品，最近进行了简单的修改，并上传至GitHub  
后期稍改动的响应式，所以界面并不算好 =_= 请见谅  

##使用前配置

打开`common.js`，填入你的多说ID。
```
var duoshuoQuery = {short_name:"在此填入多说ID"};
```

然后到多说后台，自定义样式。

```
#ds-thread #ds-reset .ds-sort, #ds-thread #ds-reset #ds-bubble, #ds-thread #ds-reset .ds-powered-by, #ds-reset .ds-logo, #ds-wrapper #ds-reset .ds-dialog-footer, .ds-post-likes, .ds-post-report, .ds-post-repost, #ds-smilies-tooltip ul.ds-smilies-tabs, .ds-comments-tabs { display: none !important;}
#ds-thread #ds-reset li.ds-tab a { background: none !important; border: 0 !important; font-size: 14px !important; color: #999 !important;}
#ds-thread #ds-reset a.ds-comment-context, .page-break { color: #999 !important;}
#ds-thread #ds-reset ul.ds-comments-tabs .ds-highlight, #ds-notify #ds-reset ul.ds-notify-unread li a, #ds-wrapper #ds-reset .ds-unread-list li a, #ds-wrapper #ds-reset .ds-unread-list li a:hover { color: #2CB4BF !important;}
#ds-wrapper #ds-reset .ds-unread-list li a:hover, #ds-thread #ds-reset .ds-login-buttons .ds-more-services:hover { text-decoration: underline;}
#ds-thread #ds-reset li.ds-post { border-top: 1px dotted #DDD !important;}
#ds-thread #ds-reset .ds-comments, #ds-thread #ds-reset .ds-paginator { border-bottom: 1px dotted #DDD !important;}
#ds-reset .ds-avatar img { box-shadow: none !important;}
#ds-thread #ds-reset ul.ds-children { margin-left: 50px !important;}
#ds-reset .ds-highlight, #ds-thread #ds-reset .ds-login-buttons .ds-more-services, #ds-thread #ds-reset .ds-login-buttons .ds-more-services:hover { color: #999 !important;}
#ds-thread #ds-reset .ds-comment-body p, #ds-thread #ds-reset .ds-textarea-wrapper textarea, #ds-thread #ds-reset .ds-textarea-wrapper .ds-hidden-text { font-size: 14px !important;}
#ds-thread #ds-reset .ds-post-self { padding: 20px 10px !important;}
#ds-notify #ds-reset ul.ds-notify-unread { margin: 0 !important;}
#ds-thread #ds-reset .ds-replybox { margin: 0 !important;}
#ds-smilies-tooltip .ds-smilies-container { margin-left: 0 !important; height: auto !important;}
#ds-thread #ds-reset .ds-textarea-wrapper { background: none !important;}
#ds-reset .ds-gradient-bg { background: #FBFBFB !important;}
#ds-thread #ds-reset .ds-post-button { position: absolute !important; left: 0 !important; top: 45px !important; font-weight: normal !important; font-size: 12px !important; text-shadow: none !important; border: 0 !important; height: 26px !important; line-height: 26px !important; width: 52px !important; background: #00A3CF !important; color: #FFF !important;}
#ds-thread #ds-reset button:hover, #ds-thread #ds-reset button:active { background: #40C8C9 !important; color: #FFF !important; box-shadow: none !important;}
#ds-thread #ds-reset button:active { background: #017CB9 !important;}
#ds-thread #ds-reset button:focus { outline: none !important;}
#ds-thread #ds-reset .ds-textarea-wrapper textarea:focus { color: #666 !important;}
#ds-thread #ds-reset .ds-comment-body p { color: #666 !important;}
#ds-thread #ds-reset .ds-textarea-wrapper, #ds-thread #ds-reset .ds-post-options, #ds-thread #ds-reset .ds-post-button { border-radius: 0 !important;}
#ds-thread #ds-reset .ds-post-options { margin-right: 0 !important; border: 1px solid #CCC !important;}
#ds-smilies-tooltip, #ds-thread #ds-reset .ds-account-control ul { border-radius: 0 !important; box-shadow: none !important;}
#ds-thread #ds-reset .ds-inline-replybox { margin: 18px 0 38px 0 !important;}
#ds-thread #ds-reset .ds-post-self { border: 0 !important;}
.ds-user-name { font: 14px Verdana,SimSun !important;}
#ds-thread #ds-reset .ds-time  { font: 12px Verdana,SimSun !important;}
#ds-thread #ds-reset .ds-paginator a.ds-current, #ds-thread #ds-reset a { color: #999 !important;}
#ds-notify { z-index: 10001 !important;}
#ds-thread #ds-reset .ds-paginator { text-align:center !important;}
.ds-comments-info { padding: 30px 0 !important;}
```

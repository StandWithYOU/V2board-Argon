<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="/favicon.ico">
    <title>bob-argon-v2board-vue</title>
    <link rel="stylesheet" href="https://unpkg.com/element-plus/lib/theme-chalk/index.css">
    <link href="/css/app.4644ca90.css" rel="preload" as="style">
    <link href="/css/chunk-vendors.4f06f28f.css" rel="preload" as="style">
    <link href="/js/app.047cde01.js" rel="preload" as="script">
    <link href="/js/chunk-vendors.287a91ee.js" rel="preload" as="script">
    <link href="/css/chunk-vendors.4f06f28f.css" rel="stylesheet">
    <link href="/css/app.4644ca90.css" rel="stylesheet">
</head>
<body>
<div id="app"></div>
<script>
    const SCRIPT_ID = '{{$crisp_id}}'; // 填写Crisp_id即可开启crisp客服
    if (SCRIPT_ID) {
        window.$crisp = [];
        window.CRISP_WEBSITE_ID = SCRIPT_ID;
        (function () {
            d = document;
            s = d.createElement("script");
            s.src = "https://client.crisp.chat/l.js";
            s.async = 1;
            d.getElementsByTagName("head")[0].appendChild(s);
        })();
    }
</script>
<script src="/js/chunk-vendors.287a91ee.js"></script>
<script src="/js/app.047cde01.js"></script>
</body>
</html>

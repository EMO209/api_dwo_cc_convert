<?php
// 接口密钥
$token = "520xiaoduAPI";
$apiUrl = "https://openapi.dwo.cc/api/convert";

// 场景1：6位行政区编码 → 地名
$postData = http_build_query([
    'code' => '360423'
]);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
// 请求头携带密钥
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer {$token}",
    "Content-Type: application/x-www-form-urlencoded"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
// 关闭SSL校验（本地测试用，生产建议开启true）
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
$curlErr = curl_errno($ch);
curl_close($ch);

if ($curlErr !== 0) {
    die("请求失败，CURL错误：" . $curlErr);
}

// 打印原始响应
echo $response . PHP_EOL;
// 解析JSON
$json = json_decode($response, true);
print_r($json);
?>

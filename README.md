<div align="center">
  <img width="280px" alt="logo" src="https://cdn.heylie.cn/tb/xiaodu_x.png"/>
  <h1>DWO 行政区编码双向转换工具</h1>
  <p><em>免费云端地址互转API，轻量化开箱即用</em></p>
  <div>
    <img src="https://img.shields.io/badge/API-Free-brightgreen" alt="免费接口"/>
    <img src="https://img.shields.io/badge/Service-24h-blue" alt="稳定服务"/>
    <img src="https://img.shields.io/badge/Support-GET/POST-orange" alt="双请求兼容"/>
    <img src="https://img.shields.io/badge/Language-全语言兼容-purple" alt="多语言适配"/>
    <img src="https://img.shields.io/github/license/EMO209/api_dwo_cc_convert" alt="MIT开源协议"/>
  </div>
  <br />
  <div>
    <a href="#项目简介">项目简介</a> •
    <a href="#核心功能">核心功能</a> •
    <a href="#基础服务信息">基础服务信息</a> •
    <a href="#快速调用示例">快速接入</a> •
    <a href="#适用业务场景">适用场景</a> •
    <a href="#项目优势">项目优势</a> •
    <a href="#简单接入说明">接入说明</a> •
    <a href="#合规声明">合规声明</a>
  </div>
</div>

---

## 📋 目录
- [项目简介](#项目简介)
- [核心功能](#核心功能)
- [基础服务信息](#基础服务信息)
- [快速调用示例](#快速调用示例)
- [适用业务场景](#适用业务场景)
- [项目优势](#项目优势)
- [简单接入说明](#简单接入说明)
- [合规声明](#合规声明)
- [贡献指南](#贡献指南)
- [许可证](#许可证)
- [联系方式](#联系方式)
- [赞赏支持](#赞赏支持)
- [赞助者名单](#赞助者名单)
- [Star History](#star-history)

---

## 🎯 项目简介
在电商表单、政务系统、数据统计、地址数据清洗等开发场景里，我们经常需要实现**行政区名称**和**6位国标行政区划代码**互相转换。
如果本地存储完整省市县字典，会存在数据更新滞后、打包体积大、批量转换效率低等问题。

为此我们提供一套云端免维护转换服务，无需本地存放地址库，直接调用线上接口即可完成双向解析，永久免费开放、无调用次数限制，适配前后端、脚本、爬虫等全开发场景。

完整接口详情文档：https://api.dwo.cc/api/70

---

## ✨ 核心功能
1. **地名转行政区代码**  
输入完整省市区县名称，自动匹配对应6位国标数字编码，方便数据库统一存储地址编码。

2. **代码还原完整地名**  
仅存编码的数据库数据，一键还原「省,市,区县」完整层级中文名称，用于页面展示、报表导出。

3. **轻量化开箱即用**  
无需下载地址字典、无需手动更新行政区划变更数据，云端实时维护最新地址库，一次接入永久使用。

---

## 📌 基础服务信息
| 项目 | 内容 |
| ---- | ---- |
| 页面文档地址 | https://api.dwo.cc/api/70 |
| 请求地址 | `https://openapi.dwo.cc/api/convert` |
| 请求方式 | GET / POST 双兼容 |
| 使用权限 | 免费无限制调用，无秘钥即可直接使用 |
| 数据覆盖 | 全国完整省/市/区县最新行政区划数据 |

---

## 🚀 快速调用示例
### 1. 根据6位编码查询地名
```http
GET https://openapi.dwo.cc/api/convert?code=360423
```

### 2. 根据地址名称查询编码
```http
GET https://openapi.dwo.cc/api/convert?text=江西省九江市武宁县
```

### 标准返回示例
```json
{
  "code": "360423",
  "name": "江西省,九江市,武宁县"
}
```

---

## 🎯 适用业务场景
- 电商、外卖平台收货地址三级选择器数据回填
- 政务、人事、户籍系统地址数据标准化处理
- Excel/CSV批量地址清洗、批量编码转换工具
- 地理数据大屏、区域统计系统地址解析
- 爬虫、数据采集项目统一地址编码映射

---

## 💡 项目优势
- ✅ 零本地字典，减少项目打包体积
- ✅ 云端自动更新区县调整、撤县设区数据
- ✅ 免费不限调用次数，个人/小型项目直接使用
- ✅ 极简入参，仅需传入地名或编码，上手成本极低
- ✅ 全语言兼容，前端JS、后端PHP/Java/Python均可接入

---

## 📖 简单接入说明
仅需传入单一参数：`text`（地名）或 `code`（6位数字编码），二选一传递，无需复杂请求体，URL拼接参数即可发起请求，接口直接返回结构化JSON地址信息。

完整参数、异常状态码、进阶使用方案请前往官网接口页面查看：https://api.dwo.cc/api/70

---

## ⚠️ 合规声明
本项目仅提供纯技术工具接口，所有行政区划数据均来自公开国标网络资源，仅用于技术学习与企业内部业务处理。
接口返回的地址数据版权归属对应数据源平台。

使用者需保证调用行为符合当地法律法规，禁止用于恶意批量爬取、侵权商用、非法采集等违规场景；违规使用产生的全部法律后果由使用者自行承担。

---

## 🤝 贡献指南
欢迎提交 Issue 反馈接口BUG、提交新功能需求，也可发起PR优化仓库文档。

### 贡献步骤
1. Fork 本仓库
2. 创建功能分支
3. 提交更改
4. 发起 Pull Request

---

## 📄 许可证
本仓库所有文档、示例代码采用 MIT 开源许可证，详见仓库根目录 `LICENSE` 文件。

---

## 📮 联系方式
- **项目官网**: https://api.dwo.cc
- **反馈邮箱**: admin@dwo.cc
- **GitHub仓库**: https://github.com/EMO209/api_dwo_cc_convert/

---

## 💖 赞赏支持
如果您觉得这套免费API工具对开发有帮助，欢迎小额赞助支持长期维护更新。

<div align="center">
  <img src="https://oss4liview.moji.com/thd_file/2026/07/05/843f0f584391dd85e7bcc9fde1135272.jpg" alt="微信支付宝赞赏码" width="410" />
  <p><strong>微信 / 支付宝 统一赞赏码</strong></p>
  <p>感谢您的支持，我们会持续迭代更新接口数据！</p>
</div>

---

## 🏆 赞助者名单

感谢以下支持者的慷慨赞助，您的支持是我们持续优化接口的动力！

| 序号 | 赞助者 | 金额/留言 |
| :--: | :----: | :--------: |
| 1 | 晚安云 | 服务器 8-8 |
| 2 | Canscode | API系统源码 |
| 3 | 明心科技 | SSL证书1年 |
| 4 | 远梦支付 | 支付系统年卡 |
| 5 | 葵桐网络 | ¥66.66 |
| 6 | 小e | ¥30 |
| 7 | out joker | ¥30 |
| 8 | Evidence | ¥20 |
| 9 | 晨晖时光网络科技 | ¥8.88 |
| 10 | 尋鯨錄 | ¥4.4 |
| 11 | 老己 | 天天开心 |

<div align="center">
  更多赞助记录前往官网查看完整列表：<a href="https://api.dwo.cc/sponsor">https://api.dwo.cc/sponsor</a>
</div>

---

## 🌟 Star History
[![Star History Chart](https://api.star-history.com/svg?repos=EMO209/api_dwo_cc_convert&type=date&legend=top-left)](https://star-history.com/#EMO209/api_dwo_cc_convert&Date)

<div align="center">
  ⭐ 如果这个项目对您有帮助，请给仓库点 Star 支持一下！
</div>

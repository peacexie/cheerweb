

## 常用文件目录

* CheerWeb(开心企业网) 模板修改指南
* 常用文件和目录

--- --- --- --- --- ---

#### 模板目录

* /views/      - 项目模板:总目录
* /views/adm/  - 后台管理模板
* /views/base/ - 基础工具模板，如:map,动态js/css,工具等
* /views/comm/ - 中文版模板（默认）
* /views/ven/  - 英文版模板
* /views/ves/  - 西班牙语模板
* /views/vfr/  - 法语模板
* /views/vru/  - 俄语模板

模板目录详情，以`中文版`为例，其他语言版结构相同

* /views/comm/\_config/ - 中文版配置
* /views/comm/\_ctrls/  -  控制器方法扩展代码
* /views/comm/assets/   - 资源目录，如css,js,images
* /views/comm/about/    - 公司介绍模块模板
* /views/comm/cargo/    - 产品展示模块模板
* /views/comm/home/     - 中文版首页模板
* /views/comm/info/     - 留言/导航等杂项模板
* /views/comm/news/     - 资讯模块模板
* /views/comm/u-inc/    - 公共区块，如头尾等
* /views/comm/u-inc/ahead.htm - 公共头文件
* /views/comm/u-inc/afoot.htm - 公共尾文件
* /views/comm/u-inc/amenu.htm - 公共菜单文件

导航首页相关文件目录

* /views/base/home/              - 首页相关 总目录
* /views/base/home/home-en.htm   - 首页模板(英文版)
* /views/base/home/home-cn.htm   - 首页模板(中文版，预留)
* /views/base/home/layout.htm    - 首页布局
* 首页需跳转或更多DIY，修改控制器文件 `/views/base/_ctrls/homeCtrl.php` 内的 `homeAct()` 方法

--- --- --- --- --- ---

以下目录：多语言 使用

#### 核心语言包目录

* /imcat/flow/         - 核心语言包:总目录
* /imcat/flow/kvphp/   - 核心语言包:php键值对变量
* /imcat/flow/ptinc/   - 核心语言包:inc小段落，语句片段
* /imcat/flow/ucfgs/   - 核心语言包:导航，配置等

#### 扩展目录(语言包)

* /root/extra/         - 项目扩展:总目录
* /root/extra/kvphp/   - 扩展语言包:php键值对变量
* /root/extra/ptinc/   - 扩展语言包:inc小段路，语句片段
* /root/extra/ucfgs/   - 扩展语言包:导航，配置等

--- --- --- --- --- ---

### (附)资料管理

这步骤不要偷懒，要偷懒的话，请做静态页面！不需要后台维护！

#### 设置：产品类别，品牌

* 自己公司有什么产品，有哪些产品分类；以及哪些品牌资料；到后台设置资料吧！
* 根据设置的资料，同时设置多语言包翻译资料，目录见上：/root/extra/kvphp/ - 扩展语言包:php键值对变量

#### 栏目的类别

* 如果需要，公司介绍，新闻 等栏目，也可自己增加，修改，设置；
* 同样的，按上提示，设置多语言包翻译资料

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"], {
  /***/
  "./$$_lazy_route_resource lazy recursive":
  /*!******************************************************!*\
    !*** ./$$_lazy_route_resource lazy namespace object ***!
    \******************************************************/

  /*! no static exports found */

  /***/
  function $$_lazy_route_resourceLazyRecursive(module, exports) {
    function webpackEmptyAsyncContext(req) {
      // Here Promise.resolve().then() is used instead of new Promise() to prevent
      // uncaught exception popping up in devtools
      return Promise.resolve().then(function () {
        var e = new Error("Cannot find module '" + req + "'");
        e.code = 'MODULE_NOT_FOUND';
        throw e;
      });
    }

    webpackEmptyAsyncContext.keys = function () {
      return [];
    };

    webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
    module.exports = webpackEmptyAsyncContext;
    webpackEmptyAsyncContext.id = "./$$_lazy_route_resource lazy recursive";
    /***/
  },

  /***/
  "./src/app/app-routing.module.ts":
  /*!***************************************!*\
    !*** ./src/app/app-routing.module.ts ***!
    \***************************************/

  /*! exports provided: AppRoutingModule */

  /***/
  function srcAppAppRoutingModuleTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "AppRoutingModule", function () {
      return AppRoutingModule;
    });
    /* harmony import */


    var _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./views/front/user/user.component */
    "./src/app/views/front/user/user.component.ts");
    /* harmony import */


    var _views_front_user_user_login_user_login_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! ./views/front/user/user-login/user-login.component */
    "./src/app/views/front/user/user-login/user-login.component.ts");
    /* harmony import */


    var _views_front_user_user_candidate_user_candidate_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ./views/front/user/user-candidate/user-candidate.component */
    "./src/app/views/front/user/user-candidate/user-candidate.component.ts");
    /* harmony import */


    var _services_auth_guard_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! ./services/auth-guard.service */
    "./src/app/services/auth-guard.service.ts");
    /* harmony import */


    var _views_front_home_home_not_found_home_not_found_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! ./views/front/home/home-not-found/home-not-found.component */
    "./src/app/views/front/home/home-not-found/home-not-found.component.ts");
    /* harmony import */


    var _views_front_user_user_details_user_details_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! ./views/front/user/user-details/user-details.component */
    "./src/app/views/front/user/user-details/user-details.component.ts");

    var routes = [{
      path: '',
      component: _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_0__["UserComponent"]
    }, {
      path: 'login',
      component: _views_front_user_user_login_user_login_component__WEBPACK_IMPORTED_MODULE_1__["UserLoginComponent"]
    }, {
      path: ':id',
      component: _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_0__["UserComponent"]
    }, {
      path: 'user',
      canActivate: [_services_auth_guard_service__WEBPACK_IMPORTED_MODULE_3__["AuthGuardService"]],
      children: [{
        path: '',
        component: _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_0__["UserComponent"]
      }, {
        path: 'details/:id',
        component: _views_front_user_user_details_user_details_component__WEBPACK_IMPORTED_MODULE_5__["UserDetailsComponent"]
      }, {
        path: 'candidate',
        component: _views_front_user_user_candidate_user_candidate_component__WEBPACK_IMPORTED_MODULE_2__["UserCandidateComponent"]
      }]
    }, {
      path: 'not-found',
      component: _views_front_home_home_not_found_home_not_found_component__WEBPACK_IMPORTED_MODULE_4__["HomeNotFoundComponent"]
    }, {
      path: '**',
      redirectTo: 'not-found'
    }];

    var AppRoutingModule = function AppRoutingModule() {
      _classCallCheck(this, AppRoutingModule);
    };
    /***/

  },

  /***/
  "./src/app/app.component.css.shim.ngstyle.js":
  /*!***************************************************!*\
    !*** ./src/app/app.component.css.shim.ngstyle.js ***!
    \***************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppAppComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = ["#maincontent[_ngcontent-%COMP%] {\r\n    background-color: green;\r\n    height: 100%;\r\n    width: 100%;\r\n  }\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvYXBwLmNvbXBvbmVudC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6Ijs7QUFFQTtJQUNJLHVCQUF1QjtJQUN2QixZQUFZO0lBQ1osV0FBVztFQUNiIiwiZmlsZSI6InNyYy9hcHAvYXBwLmNvbXBvbmVudC5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyJcclxuXHJcbiNtYWluY29udGVudCB7XHJcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiBncmVlbjtcclxuICAgIGhlaWdodDogMTAwJTtcclxuICAgIHdpZHRoOiAxMDAlO1xyXG4gIH1cclxuICAiXX0= */"];
    /***/
  },

  /***/
  "./src/app/app.component.ngfactory.js":
  /*!********************************************!*\
    !*** ./src/app/app.component.ngfactory.js ***!
    \********************************************/

  /*! exports provided: RenderType_AppComponent, View_AppComponent_0, View_AppComponent_Host_0, AppComponentNgFactory */

  /***/
  function srcAppAppComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_AppComponent", function () {
      return RenderType_AppComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_AppComponent_0", function () {
      return View_AppComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_AppComponent_Host_0", function () {
      return View_AppComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "AppComponentNgFactory", function () {
      return AppComponentNgFactory;
    });
    /* harmony import */


    var _app_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./app.component.css.shim.ngstyle */
    "./src/app/app.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");
    /* harmony import */


    var _node_modules_ngx_ui_loader_ngx_ui_loader_ngfactory__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! ../../node_modules/ngx-ui-loader/ngx-ui-loader.ngfactory */
    "./node_modules/ngx-ui-loader/ngx-ui-loader.ngfactory.js");
    /* harmony import */


    var ngx_ui_loader__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! ngx-ui-loader */
    "./node_modules/ngx-ui-loader/fesm2015/ngx-ui-loader.js");
    /* harmony import */


    var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! @angular/platform-browser */
    "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");
    /* harmony import */


    var _app_component__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! ./app.component */
    "./src/app/app.component.ts");
    /* harmony import */


    var _services_user_service__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
    /*! ./services/user.service */
    "./src/app/services/user.service.ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_AppComponent = [_app_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_AppComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_AppComponent,
      data: {}
    });

    function View_AppComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 16777216, null, null, 1, "router-outlet", [], null, null, null, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 212992, null, 0, _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterOutlet"], [_angular_router__WEBPACK_IMPORTED_MODULE_2__["ChildrenOutletContexts"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["ComponentFactoryResolver"], [8, null], _angular_core__WEBPACK_IMPORTED_MODULE_1__["ChangeDetectorRef"]], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 1, "ngx-ui-loader", [], null, null, null, _node_modules_ngx_ui_loader_ngx_ui_loader_ngfactory__WEBPACK_IMPORTED_MODULE_3__["View_ɵb_0"], _node_modules_ngx_ui_loader_ngx_ui_loader_ngfactory__WEBPACK_IMPORTED_MODULE_3__["RenderType_ɵb"])), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](3, 770048, null, 0, ngx_ui_loader__WEBPACK_IMPORTED_MODULE_4__["ɵb"], [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_5__["DomSanitizer"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["ChangeDetectorRef"], ngx_ui_loader__WEBPACK_IMPORTED_MODULE_4__["NgxUiLoaderService"]], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);

        _ck(_v, 3, 0);
      }, null);
    }

    function View_AppComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-root", [], null, null, null, View_AppComponent_0, RenderType_AppComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _app_component__WEBPACK_IMPORTED_MODULE_6__["AppComponent"], [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _services_user_service__WEBPACK_IMPORTED_MODULE_7__["UserService"]], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var AppComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-root", _app_component__WEBPACK_IMPORTED_MODULE_6__["AppComponent"], View_AppComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/app.component.ts":
  /*!**********************************!*\
    !*** ./src/app/app.component.ts ***!
    \**********************************/

  /*! exports provided: AppComponent */

  /***/
  function srcAppAppComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "AppComponent", function () {
      return AppComponent;
    });
    /* harmony import */


    var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! tslib */
    "./node_modules/tslib/tslib.es6.js");

    var AppComponent = /*#__PURE__*/function () {
      function AppComponent(router, userService) {
        _classCallCheck(this, AppComponent);

        this.router = router;
        this.userService = userService;
        this.name = 'Angular';
      }

      _createClass(AppComponent, [{
        key: "onAddressChange",
        value: function onAddressChange(event) {
          console.log('onAddressChange', event);
        }
      }, {
        key: "ngOnInit",
        value: function ngOnInit() {
          return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(this, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
            return regeneratorRuntime.wrap(function _callee$(_context) {
              while (1) {
                switch (_context.prev = _context.next) {
                  case 0:
                    // this.ngxService.start()
                    this.userService.checkIfUserExist(); // this.ngxService.stop();
                    // this.ngxService.start();
                    // const seller: Seller = {
                    //   Id: 1,
                    //   CreateOn: new Date("2021-02-09T00:00:00"),
                    //   UpdateOn: null,
                    //   Email: "chaomaos@gmail.com",
                    //   Password: "nÕƒ<óR†ëøf+{YIð×B»ì?",
                    //   Status: null
                    // }
                    // this.sellerOperation.getOperationsOfSeller(1).subscribe(
                    //   value => console.log(value),
                    //   error => console.log(error)
                    // )

                  case 1:
                  case "end":
                    return _context.stop();
                }
              }
            }, _callee, this);
          }));
        }
      }]);

      return AppComponent;
    }();
    /***/

  },

  /***/
  "./src/app/app.module.ngfactory.js":
  /*!*****************************************!*\
    !*** ./src/app/app.module.ngfactory.js ***!
    \*****************************************/

  /*! exports provided: AppModuleNgFactory */

  /***/
  function srcAppAppModuleNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "AppModuleNgFactory", function () {
      return AppModuleNgFactory;
    });
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _app_module__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! ./app.module */
    "./src/app/app.module.ts");
    /* harmony import */


    var _app_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ./app.component */
    "./src/app/app.component.ts");
    /* harmony import */


    var _node_modules_angular_router_router_ngfactory__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! ../../node_modules/@angular/router/router.ngfactory */
    "./node_modules/@angular/router/router.ngfactory.js");
    /* harmony import */


    var _views_front_user_user_component_ngfactory__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! ./views/front/user/user.component.ngfactory */
    "./src/app/views/front/user/user.component.ngfactory.js");
    /* harmony import */


    var _views_front_user_user_login_user_login_component_ngfactory__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! ./views/front/user/user-login/user-login.component.ngfactory */
    "./src/app/views/front/user/user-login/user-login.component.ngfactory.js");
    /* harmony import */


    var _views_front_user_user_details_user_details_component_ngfactory__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! ./views/front/user/user-details/user-details.component.ngfactory */
    "./src/app/views/front/user/user-details/user-details.component.ngfactory.js");
    /* harmony import */


    var _views_front_user_user_candidate_user_candidate_component_ngfactory__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
    /*! ./views/front/user/user-candidate/user-candidate.component.ngfactory */
    "./src/app/views/front/user/user-candidate/user-candidate.component.ngfactory.js");
    /* harmony import */


    var _views_front_home_home_not_found_home_not_found_component_ngfactory__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
    /*! ./views/front/home/home-not-found/home-not-found.component.ngfactory */
    "./src/app/views/front/home/home-not-found/home-not-found.component.ngfactory.js");
    /* harmony import */


    var _node_modules_ngx_toastr_ngx_toastr_ngfactory__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
    /*! ../../node_modules/ngx-toastr/ngx-toastr.ngfactory */
    "./node_modules/ngx-toastr/ngx-toastr.ngfactory.js");
    /* harmony import */


    var _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
    /*! ../../node_modules/@ng-bootstrap/ng-bootstrap/ng-bootstrap.ngfactory */
    "./node_modules/@ng-bootstrap/ng-bootstrap/ng-bootstrap.ngfactory.js");
    /* harmony import */


    var _app_component_ngfactory__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(
    /*! ./app.component.ngfactory */
    "./src/app/app.component.ngfactory.js");
    /* harmony import */


    var _angular_common__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(
    /*! @angular/common */
    "./node_modules/@angular/common/fesm2015/common.js");
    /* harmony import */


    var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(
    /*! @angular/platform-browser */
    "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");
    /* harmony import */


    var _angular_animations_browser__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(
    /*! @angular/animations/browser */
    "./node_modules/@angular/animations/fesm2015/browser.js");
    /* harmony import */


    var _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(
    /*! @angular/platform-browser/animations */
    "./node_modules/@angular/platform-browser/fesm2015/animations.js");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");
    /* harmony import */


    var _angular_forms__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(
    /*! @angular/forms */
    "./node_modules/@angular/forms/fesm2015/forms.js");
    /* harmony import */


    var _angular_common_http__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(
    /*! @angular/common/http */
    "./node_modules/@angular/common/fesm2015/http.js");
    /* harmony import */


    var _angular_animations__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(
    /*! @angular/animations */
    "./node_modules/@angular/animations/fesm2015/animations.js");
    /* harmony import */


    var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(
    /*! @ng-bootstrap/ng-bootstrap */
    "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
    /* harmony import */


    var _services_confirmation_dialog_service__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(
    /*! ./services/confirmation-dialog.service */
    "./src/app/services/confirmation-dialog.service.ts");
    /* harmony import */


    var _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(
    /*! ./views/front/user/user.component */
    "./src/app/views/front/user/user.component.ts");
    /* harmony import */


    var _views_front_user_user_login_user_login_component__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(
    /*! ./views/front/user/user-login/user-login.component */
    "./src/app/views/front/user/user-login/user-login.component.ts");
    /* harmony import */


    var _services_auth_guard_service__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(
    /*! ./services/auth-guard.service */
    "./src/app/services/auth-guard.service.ts");
    /* harmony import */


    var _views_front_user_user_details_user_details_component__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(
    /*! ./views/front/user/user-details/user-details.component */
    "./src/app/views/front/user/user-details/user-details.component.ts");
    /* harmony import */


    var _views_front_user_user_candidate_user_candidate_component__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(
    /*! ./views/front/user/user-candidate/user-candidate.component */
    "./src/app/views/front/user/user-candidate/user-candidate.component.ts");
    /* harmony import */


    var _views_front_home_home_not_found_home_not_found_component__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(
    /*! ./views/front/home/home-not-found/home-not-found.component */
    "./src/app/views/front/home/home-not-found/home-not-found.component.ts");
    /* harmony import */


    var _app_routing_module__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(
    /*! ./app-routing.module */
    "./src/app/app-routing.module.ts");
    /* harmony import */


    var ngx_toastr__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(
    /*! ngx-toastr */
    "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");
    /* harmony import */


    var ngx_ui_loader__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(
    /*! ngx-ui-loader */
    "./node_modules/ngx-ui-loader/fesm2015/ngx-ui-loader.js");
    /* harmony import */


    var ngx_clipboard__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(
    /*! ngx-clipboard */
    "./node_modules/ngx-clipboard/fesm2015/ngx-clipboard.js");
    /* harmony import */


    var ngx_openlayers__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(
    /*! ngx-openlayers */
    "./node_modules/ngx-openlayers/dist/index.js");
    /* harmony import */


    var ngx_openlayers__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(ngx_openlayers__WEBPACK_IMPORTED_MODULE_32__);
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var AppModuleNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵcmf"](_app_module__WEBPACK_IMPORTED_MODULE_1__["AppModule"], [_app_component__WEBPACK_IMPORTED_MODULE_2__["AppComponent"]], function (_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmod"]([_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ComponentFactoryResolver"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵCodegenComponentFactoryResolver"], [[8, [_node_modules_angular_router_router_ngfactory__WEBPACK_IMPORTED_MODULE_3__["ɵangular_packages_router_router_lNgFactory"], _views_front_user_user_component_ngfactory__WEBPACK_IMPORTED_MODULE_4__["UserComponentNgFactory"], _views_front_user_user_login_user_login_component_ngfactory__WEBPACK_IMPORTED_MODULE_5__["UserLoginComponentNgFactory"], _views_front_user_user_details_user_details_component_ngfactory__WEBPACK_IMPORTED_MODULE_6__["UserDetailsComponentNgFactory"], _views_front_user_user_candidate_user_candidate_component_ngfactory__WEBPACK_IMPORTED_MODULE_7__["UserCandidateComponentNgFactory"], _views_front_home_home_not_found_home_not_found_component_ngfactory__WEBPACK_IMPORTED_MODULE_8__["HomeNotFoundComponentNgFactory"], _node_modules_ngx_toastr_ngx_toastr_ngfactory__WEBPACK_IMPORTED_MODULE_9__["ToastNgFactory"], _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__["NgbAlertNgFactory"], _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__["NgbDatepickerNgFactory"], _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__["ɵuNgFactory"], _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__["ɵvNgFactory"], _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__["ɵmNgFactory"], _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__["ɵrNgFactory"], _node_modules_ng_bootstrap_ng_bootstrap_ng_bootstrap_ngfactory__WEBPACK_IMPORTED_MODULE_10__["ɵsNgFactory"], _app_component_ngfactory__WEBPACK_IMPORTED_MODULE_11__["AppComponentNgFactory"]]], [3, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ComponentFactoryResolver"]], _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModuleRef"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_core__WEBPACK_IMPORTED_MODULE_0__["LOCALE_ID"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵangular_packages_core_core_r"], [[3, _angular_core__WEBPACK_IMPORTED_MODULE_0__["LOCALE_ID"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_common__WEBPACK_IMPORTED_MODULE_12__["NgLocalization"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["NgLocaleLocalization"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["LOCALE_ID"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵangular_packages_core_core_x"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵangular_packages_core_core_t"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_core__WEBPACK_IMPORTED_MODULE_0__["APP_ID"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵangular_packages_core_core_g"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_core__WEBPACK_IMPORTED_MODULE_0__["IterableDiffers"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵangular_packages_core_core_p"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_core__WEBPACK_IMPORTED_MODULE_0__["KeyValueDiffers"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵangular_packages_core_core_q"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["DomSanitizer"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomSanitizerImpl"], [_angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](6144, _angular_core__WEBPACK_IMPORTED_MODULE_0__["Sanitizer"], null, [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["DomSanitizer"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["HAMMER_GESTURE_CONFIG"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["HammerGestureConfig"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["EVENT_MANAGER_PLUGINS"], function (p0_0, p0_1, p0_2, p1_0, p2_0, p2_1, p2_2, p2_3) {
        return [new _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomEventsPlugin"](p0_0, p0_1, p0_2), new _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵKeyEventsPlugin"](p1_0), new _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵHammerGesturesPlugin"](p2_0, p2_1, p2_2, p2_3)];
      }, [_angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["PLATFORM_ID"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["HAMMER_GESTURE_CONFIG"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵConsole"], [2, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["HAMMER_LOADER"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["EventManager"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["EventManager"], [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["EVENT_MANAGER_PLUGINS"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](135680, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomSharedStylesHost"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomSharedStylesHost"], [_angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomRendererFactory2"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomRendererFactory2"], [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["EventManager"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomSharedStylesHost"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["APP_ID"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_animations_browser__WEBPACK_IMPORTED_MODULE_14__["AnimationDriver"], _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["ɵangular_packages_platform_browser_animations_animations_a"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_animations_browser__WEBPACK_IMPORTED_MODULE_14__["ɵAnimationStyleNormalizer"], _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["ɵangular_packages_platform_browser_animations_animations_b"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_animations_browser__WEBPACK_IMPORTED_MODULE_14__["ɵAnimationEngine"], _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["ɵInjectableAnimationEngine"], [_angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"], _angular_animations_browser__WEBPACK_IMPORTED_MODULE_14__["AnimationDriver"], _angular_animations_browser__WEBPACK_IMPORTED_MODULE_14__["ɵAnimationStyleNormalizer"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_core__WEBPACK_IMPORTED_MODULE_0__["RendererFactory2"], _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["ɵangular_packages_platform_browser_animations_animations_c"], [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomRendererFactory2"], _angular_animations_browser__WEBPACK_IMPORTED_MODULE_14__["ɵAnimationEngine"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](6144, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵSharedStylesHost"], null, [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵDomSharedStylesHost"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_core__WEBPACK_IMPORTED_MODULE_0__["Testability"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Testability"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ActivatedRoute"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_g"], [_angular_router__WEBPACK_IMPORTED_MODULE_16__["Router"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_router__WEBPACK_IMPORTED_MODULE_16__["NoPreloading"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["NoPreloading"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](6144, _angular_router__WEBPACK_IMPORTED_MODULE_16__["PreloadingStrategy"], null, [_angular_router__WEBPACK_IMPORTED_MODULE_16__["NoPreloading"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](135680, _angular_router__WEBPACK_IMPORTED_MODULE_16__["RouterPreloader"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["RouterPreloader"], [_angular_router__WEBPACK_IMPORTED_MODULE_16__["Router"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModuleFactoryLoader"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Compiler"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injector"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["PreloadingStrategy"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_router__WEBPACK_IMPORTED_MODULE_16__["PreloadAllModules"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["PreloadAllModules"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_o"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_c"], [_angular_router__WEBPACK_IMPORTED_MODULE_16__["Router"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["ViewportScroller"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTER_CONFIGURATION"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTER_INITIALIZER"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_j"], [_angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_h"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_core__WEBPACK_IMPORTED_MODULE_0__["APP_BOOTSTRAP_LISTENER"], function (p0_0) {
        return [p0_0];
      }, [_angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTER_INITIALIZER"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_forms__WEBPACK_IMPORTED_MODULE_17__["ɵangular_packages_forms_forms_n"], _angular_forms__WEBPACK_IMPORTED_MODULE_17__["ɵangular_packages_forms_forms_n"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpXsrfTokenExtractor"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_g"], [_angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["PLATFORM_ID"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_e"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_h"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_h"], [_angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpXsrfTokenExtractor"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_f"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](5120, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HTTP_INTERCEPTORS"], function (p0_0) {
        return [p0_0];
      }, [_angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_h"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_d"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_d"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](6144, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["XhrFactory"], null, [_angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_d"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpXhrBackend"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpXhrBackend"], [_angular_common_http__WEBPACK_IMPORTED_MODULE_18__["XhrFactory"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](6144, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpBackend"], null, [_angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpXhrBackend"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpHandler"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵHttpInterceptingHandler"], [_angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpBackend"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injector"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpClient"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpClient"], [_angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpHandler"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _angular_animations__WEBPACK_IMPORTED_MODULE_19__["AnimationBuilder"], _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["ɵBrowserAnimationBuilder"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["RendererFactory2"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["DOCUMENT"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModal"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModal"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["ComponentFactoryResolver"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injector"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["ɵw"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModalConfig"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbActiveModal"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbActiveModal"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](4608, _services_confirmation_dialog_service__WEBPACK_IMPORTED_MODULE_21__["ConfirmationDialogService"], _services_confirmation_dialog_service__WEBPACK_IMPORTED_MODULE_21__["ConfirmationDialogService"], [_ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModal"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_common__WEBPACK_IMPORTED_MODULE_12__["CommonModule"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["CommonModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1024, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ErrorHandler"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵangular_packages_platform_browser_platform_browser_a"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1024, _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgProbeToken"], function () {
        return [_angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_b"]()];
      }, []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_h"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_h"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injector"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1024, _angular_core__WEBPACK_IMPORTED_MODULE_0__["APP_INITIALIZER"], function (p0_0, p1_0) {
        return [_angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["ɵangular_packages_platform_browser_platform_browser_m"](p0_0), _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_i"](p1_0)];
      }, [[2, _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgProbeToken"]], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_h"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationInitStatus"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationInitStatus"], [[2, _angular_core__WEBPACK_IMPORTED_MODULE_0__["APP_INITIALIZER"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](131584, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationRef"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationRef"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["NgZone"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵConsole"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injector"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ErrorHandler"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ComponentFactoryResolver"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationInitStatus"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationModule"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationModule"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["ApplicationRef"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["BrowserModule"], _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["BrowserModule"], [[3, _angular_platform_browser__WEBPACK_IMPORTED_MODULE_13__["BrowserModule"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1024, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_a"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_e"], [[3, _angular_router__WEBPACK_IMPORTED_MODULE_16__["Router"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_router__WEBPACK_IMPORTED_MODULE_16__["UrlSerializer"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["DefaultUrlSerializer"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ChildrenOutletContexts"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ChildrenOutletContexts"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](256, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTER_CONFIGURATION"], {}, []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1024, _angular_common__WEBPACK_IMPORTED_MODULE_12__["LocationStrategy"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_d"], [_angular_common__WEBPACK_IMPORTED_MODULE_12__["PlatformLocation"], [2, _angular_common__WEBPACK_IMPORTED_MODULE_12__["APP_BASE_HREF"]], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTER_CONFIGURATION"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_common__WEBPACK_IMPORTED_MODULE_12__["Location"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["Location"], [_angular_common__WEBPACK_IMPORTED_MODULE_12__["LocationStrategy"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["PlatformLocation"]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_core__WEBPACK_IMPORTED_MODULE_0__["Compiler"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Compiler"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](512, _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModuleFactoryLoader"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["SystemJsNgModuleLoader"], [_angular_core__WEBPACK_IMPORTED_MODULE_0__["Compiler"], [2, _angular_core__WEBPACK_IMPORTED_MODULE_0__["SystemJsNgModuleLoaderConfig"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1024, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTES"], function () {
        return [[{
          path: "",
          component: _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_22__["UserComponent"]
        }, {
          path: "login",
          component: _views_front_user_user_login_user_login_component__WEBPACK_IMPORTED_MODULE_23__["UserLoginComponent"]
        }, {
          path: ":id",
          component: _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_22__["UserComponent"]
        }, {
          path: "user",
          canActivate: [_services_auth_guard_service__WEBPACK_IMPORTED_MODULE_24__["AuthGuardService"]],
          children: [{
            path: "",
            component: _views_front_user_user_component__WEBPACK_IMPORTED_MODULE_22__["UserComponent"]
          }, {
            path: "details/:id",
            component: _views_front_user_user_details_user_details_component__WEBPACK_IMPORTED_MODULE_25__["UserDetailsComponent"]
          }, {
            path: "candidate",
            component: _views_front_user_user_candidate_user_candidate_component__WEBPACK_IMPORTED_MODULE_26__["UserCandidateComponent"]
          }]
        }, {
          path: "not-found",
          component: _views_front_home_home_not_found_home_not_found_component__WEBPACK_IMPORTED_MODULE_27__["HomeNotFoundComponent"]
        }, {
          path: "**",
          redirectTo: "not-found"
        }]];
      }, []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1024, _angular_router__WEBPACK_IMPORTED_MODULE_16__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_f"], [_angular_router__WEBPACK_IMPORTED_MODULE_16__["UrlSerializer"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ChildrenOutletContexts"], _angular_common__WEBPACK_IMPORTED_MODULE_12__["Location"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Injector"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["NgModuleFactoryLoader"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["Compiler"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTES"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["ROUTER_CONFIGURATION"], [2, _angular_router__WEBPACK_IMPORTED_MODULE_16__["UrlHandlingStrategy"]], [2, _angular_router__WEBPACK_IMPORTED_MODULE_16__["RouteReuseStrategy"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_router__WEBPACK_IMPORTED_MODULE_16__["RouterModule"], _angular_router__WEBPACK_IMPORTED_MODULE_16__["RouterModule"], [[2, _angular_router__WEBPACK_IMPORTED_MODULE_16__["ɵangular_packages_router_router_a"]], [2, _angular_router__WEBPACK_IMPORTED_MODULE_16__["Router"]]]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _app_routing_module__WEBPACK_IMPORTED_MODULE_28__["AppRoutingModule"], _app_routing_module__WEBPACK_IMPORTED_MODULE_28__["AppRoutingModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_forms__WEBPACK_IMPORTED_MODULE_17__["ɵangular_packages_forms_forms_d"], _angular_forms__WEBPACK_IMPORTED_MODULE_17__["ɵangular_packages_forms_forms_d"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_forms__WEBPACK_IMPORTED_MODULE_17__["FormsModule"], _angular_forms__WEBPACK_IMPORTED_MODULE_17__["FormsModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpClientXsrfModule"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpClientXsrfModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpClientModule"], _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["HttpClientModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, ngx_toastr__WEBPACK_IMPORTED_MODULE_29__["ToastrModule"], ngx_toastr__WEBPACK_IMPORTED_MODULE_29__["ToastrModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, ngx_ui_loader__WEBPACK_IMPORTED_MODULE_30__["NgxUiLoaderModule"], ngx_ui_loader__WEBPACK_IMPORTED_MODULE_30__["NgxUiLoaderModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["BrowserAnimationsModule"], _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["BrowserAnimationsModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, ngx_clipboard__WEBPACK_IMPORTED_MODULE_31__["ClipboardModule"], ngx_clipboard__WEBPACK_IMPORTED_MODULE_31__["ClipboardModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbAccordionModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbAccordionModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbAlertModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbAlertModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbButtonsModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbButtonsModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbCarouselModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbCarouselModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbCollapseModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbCollapseModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbDatepickerModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbDatepickerModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbDropdownModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbDropdownModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModalModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModalModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbNavModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbNavModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbPaginationModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbPaginationModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbPopoverModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbPopoverModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbProgressbarModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbProgressbarModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbRatingModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbRatingModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTimepickerModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTimepickerModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbToastModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbToastModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTooltipModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTooltipModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTypeaheadModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTypeaheadModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTabsetModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbTabsetModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModule"], _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_20__["NgbModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, ngx_openlayers__WEBPACK_IMPORTED_MODULE_32__["AngularOpenlayersModule"], ngx_openlayers__WEBPACK_IMPORTED_MODULE_32__["AngularOpenlayersModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](1073742336, _app_module__WEBPACK_IMPORTED_MODULE_1__["AppModule"], _app_module__WEBPACK_IMPORTED_MODULE_1__["AppModule"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](256, _angular_core__WEBPACK_IMPORTED_MODULE_0__["DEFAULT_CURRENCY_CODE"], _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵangular_packages_core_core_u"], []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](256, _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵINJECTOR_SCOPE"], "root", []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](256, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_e"], "XSRF-TOKEN", []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](256, _angular_common_http__WEBPACK_IMPORTED_MODULE_18__["ɵangular_packages_common_http_http_f"], "X-XSRF-TOKEN", []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](256, _angular_platform_browser_animations__WEBPACK_IMPORTED_MODULE_15__["ANIMATION_MODULE_TYPE"], "BrowserAnimations", []), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵmpd"](256, ngx_toastr__WEBPACK_IMPORTED_MODULE_29__["TOAST_CONFIG"], {
        "default": ngx_toastr__WEBPACK_IMPORTED_MODULE_29__["DefaultGlobalConfig"],
        config: {}
      }, [])]);
    });
    /***/

  },

  /***/
  "./src/app/app.module.ts":
  /*!*******************************!*\
    !*** ./src/app/app.module.ts ***!
    \*******************************/

  /*! exports provided: AppModule */

  /***/
  function srcAppAppModuleTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "AppModule", function () {
      return AppModule;
    });

    var AppModule = function AppModule() {
      _classCallCheck(this, AppModule);
    };
    /***/

  },

  /***/
  "./src/app/models/user.ts":
  /*!********************************!*\
    !*** ./src/app/models/user.ts ***!
    \********************************/

  /*! exports provided: User */

  /***/
  function srcAppModelsUserTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "User", function () {
      return User;
    });

    var User = function User() {
      _classCallCheck(this, User);
    };
    /***/

  },

  /***/
  "./src/app/services/auth-guard.service.ts":
  /*!************************************************!*\
    !*** ./src/app/services/auth-guard.service.ts ***!
    \************************************************/

  /*! exports provided: AuthGuardService */

  /***/
  function srcAppServicesAuthGuardServiceTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "AuthGuardService", function () {
      return AuthGuardService;
    });
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _user_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! ./user.service */
    "./src/app/services/user.service.ts");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");

    var AuthGuardService = /*#__PURE__*/function () {
      function AuthGuardService(userService, router) {
        _classCallCheck(this, AuthGuardService);

        this.userService = userService;
        this.router = router;
      }

      _createClass(AuthGuardService, [{
        key: "canActivate",
        value: function canActivate(route, state) {
          if (this.userService.user || this.userService.getItem()) {
            return true;
          } else {
            this.router.navigateByUrl('/login');
          }
        }
      }]);

      return AuthGuardService;
    }();

    AuthGuardService.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
      factory: function AuthGuardService_Factory() {
        return new AuthGuardService(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_user_service__WEBPACK_IMPORTED_MODULE_1__["UserService"]), _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]));
      },
      token: AuthGuardService,
      providedIn: "root"
    });
    /***/
  },

  /***/
  "./src/app/services/base-auth.service.ts":
  /*!***********************************************!*\
    !*** ./src/app/services/base-auth.service.ts ***!
    \***********************************************/

  /*! exports provided: BaseAuthService */

  /***/
  function srcAppServicesBaseAuthServiceTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "BaseAuthService", function () {
      return BaseAuthService;
    });
    /* harmony import */


    var _angular_common_http__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! @angular/common/http */
    "./node_modules/@angular/common/fesm2015/http.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");

    var BaseAuthService = function BaseAuthService() {
      _classCallCheck(this, BaseAuthService);

      this.baseAddress = "http://fleet.tn/ws_rimtrack_all/";
      this.header = new _angular_common_http__WEBPACK_IMPORTED_MODULE_0__["HttpHeaders"]();
      this.baseOptions = {
        headers: this.header.append("Content-Type", "application/json")
      };
    };

    BaseAuthService.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵɵdefineInjectable"]({
      factory: function BaseAuthService_Factory() {
        return new BaseAuthService();
      },
      token: BaseAuthService,
      providedIn: "root"
    });
    /***/
  },

  /***/
  "./src/app/services/confirmation-dialog.service.ts":
  /*!*********************************************************!*\
    !*** ./src/app/services/confirmation-dialog.service.ts ***!
    \*********************************************************/

  /*! exports provided: ConfirmationDialogService */

  /***/
  function srcAppServicesConfirmationDialogServiceTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "ConfirmationDialogService", function () {
      return ConfirmationDialogService;
    });
    /* harmony import */


    var rxjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! rxjs */
    "./node_modules/rxjs/_esm2015/index.js");
    /* harmony import */


    var _views_front_confirmation_dialog_confirmation_dialog_component__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! ../views/front/confirmation-dialog/confirmation-dialog.component */
    "./src/app/views/front/confirmation-dialog/confirmation-dialog.component.ts");

    var ConfirmationDialogService = /*#__PURE__*/function () {
      function ConfirmationDialogService(modalService) {
        _classCallCheck(this, ConfirmationDialogService);

        this.modalService = modalService;
      }

      _createClass(ConfirmationDialogService, [{
        key: "confirm",
        value: function confirm() {
          var message = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "Etes-vous sûre de vouloir annuler l'opération ?";
          var title = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "Veuillez confirmer";
          var btnOkText = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 'OUI';
          var btnCancelText = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 'NON';
          var dialogSize = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 'sm';
          var modalRef = this.modalService.open(_views_front_confirmation_dialog_confirmation_dialog_component__WEBPACK_IMPORTED_MODULE_1__["ConfirmationDialogComponent"], {
            size: dialogSize
          });
          modalRef.componentInstance.title = title;
          modalRef.componentInstance.message = message;
          modalRef.componentInstance.btnOkText = btnOkText;
          modalRef.componentInstance.btnCancelText = btnCancelText;
          return Object(rxjs__WEBPACK_IMPORTED_MODULE_0__["from"])(modalRef.result);
        }
      }]);

      return ConfirmationDialogService;
    }();
    /***/

  },

  /***/
  "./src/app/services/notification.service .ts":
  /*!***************************************************!*\
    !*** ./src/app/services/notification.service .ts ***!
    \***************************************************/

  /*! exports provided: NotificationService */

  /***/
  function srcAppServicesNotificationServiceTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "NotificationService", function () {
      return NotificationService;
    });
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var ngx_toastr__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! ngx-toastr */
    "./node_modules/ngx-toastr/fesm2015/ngx-toastr.js");

    var NotificationService = /*#__PURE__*/function () {
      function NotificationService(toastr) {
        _classCallCheck(this, NotificationService);

        this.toastr = toastr;
      }

      _createClass(NotificationService, [{
        key: "showSuccess",
        value: function showSuccess(message, title) {
          this.toastr.success(message, title);
        }
      }, {
        key: "showError",
        value: function showError(message, title) {
          this.toastr.error(message, title);
        }
      }, {
        key: "showInfo",
        value: function showInfo(message, title) {
          this.toastr.info(message, title);
        }
      }, {
        key: "showWarning",
        value: function showWarning(message, title) {
          this.toastr.warning(message, title);
        }
      }]);

      return NotificationService;
    }();

    NotificationService.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵdefineInjectable"]({
      factory: function NotificationService_Factory() {
        return new NotificationService(_angular_core__WEBPACK_IMPORTED_MODULE_0__["ɵɵinject"](ngx_toastr__WEBPACK_IMPORTED_MODULE_1__["ToastrService"]));
      },
      token: NotificationService,
      providedIn: "root"
    });
    /***/
  },

  /***/
  "./src/app/services/user.service.ts":
  /*!******************************************!*\
    !*** ./src/app/services/user.service.ts ***!
    \******************************************/

  /*! exports provided: UserService */

  /***/
  function srcAppServicesUserServiceTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserService", function () {
      return UserService;
    });
    /* harmony import */


    var _angular_common_http__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! @angular/common/http */
    "./node_modules/@angular/common/fesm2015/http.js");
    /* harmony import */


    var rxjs__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! rxjs */
    "./node_modules/rxjs/_esm2015/index.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _base_auth_service__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! ./base-auth.service */
    "./src/app/services/base-auth.service.ts");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");
    /* harmony import */


    var _notification_service___WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! ./notification.service  */
    "./src/app/services/notification.service .ts");
    /* harmony import */


    var ngx_ui_loader__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! ngx-ui-loader */
    "./node_modules/ngx-ui-loader/fesm2015/ngx-ui-loader.js");
    /* harmony import */


    var _angular_common__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
    /*! @angular/common */
    "./node_modules/@angular/common/fesm2015/common.js");

    var UserService = /*#__PURE__*/function () {
      // user: User = new User();
      function UserService(httpClient, baseAuth, router, notifyService, ngxService, location) {
        _classCallCheck(this, UserService);

        this.httpClient = httpClient;
        this.baseAuth = baseAuth;
        this.router = router;
        this.notifyService = notifyService;
        this.ngxService = ngxService;
        this.location = location;
        this.key = "p2pex_user_token";
        this.isAuth = false;
        this.managerNumber = "+237695164368";
        this.user = null;
        this.baseAddress = baseAuth.baseAddress;
      } // ----------------------------  POST REQUEST  -----------------------------
      // ----------------------------  POST REQUEST  -----------------------------


      _createClass(UserService, [{
        key: "getUserByEmailPassword",
        value: function getUserByEmailPassword(email, password) {
          var data = {
            username: email,
            password: password
          };
          return this.httpClient.post("https://telefret.com/api_redirect/", data, this.baseAuth.baseOptions);
        }
      }, {
        key: "getUserMapMarks",
        value: function getUserMapMarks() {
          var id = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
          var token = JSON.parse(this.getItem());
          var header = new _angular_common_http__WEBPACK_IMPORTED_MODULE_0__["HttpHeaders"]();
          header.append("Content-Type", "application/json");
          var baseOptions = {
            headers: header.append('Authorization', token.token)
          };
          return this.httpClient.get("https://telefret.com/api_redirect/?id=".concat(id ? id : '', "&token=").concat(this.user.token), baseOptions);
        }
      }, {
        key: "postUser",
        value: function postUser(user) {
          return this.httpClient.post("".concat(this.baseAddress, "?f=postUser"), user, this.baseAuth.baseOptions);
        } // // ----------------------------  PUT REQUEST  -----------------------------
        // // ----------------------------  PUT REQUEST  -----------------------------
        // public putUser(user: User){
        //   user.Id = +user.Id;
        //   let data = {
        //     User: JSON.stringify(user)
        //   };
        //   return this.httpClient.post<User>(`${this.baseAddress}?f=putUser&id=${user.Id}`, data, this.baseAuth.baseOptions);
        // }
        //  ---------------------------- section token ------------------------------------------------

      }, {
        key: "logOut",
        value: function logOut() {
          this.deleteItem();
          this.user = null;
          this.isAuth = false;
        }
      }, {
        key: "addItem",
        value: function addItem(item) {
          var key = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.key;
          localStorage.setItem(key, item);
        }
      }, {
        key: "getItem",
        value: function getItem() {
          var key = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.key;
          return localStorage.getItem(key);
        }
      }, {
        key: "deleteItem",
        value: function deleteItem() {
          var key = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.key;
          localStorage.removeItem(key);
        }
      }, {
        key: "raw",
        value: function raw(qrInfo, res) {
          /** Returns the freshly created Observable **/
          return rxjs__WEBPACK_IMPORTED_MODULE_1__["Observable"].create(function (observer) {
            /** Call your method with the callback **/
            this.manager.getData(res.width, function (res1) {
              /** Emit the callback response to the Observable **/
              // observer.next(of<string>res1)

              /** Complete the Observable to close it **/
              // observer.complete();
            });
          });
        }
      }, {
        key: "checkIfUserExist",
        value: function checkIfUserExist() {
          var token = JSON.parse(this.getItem()); // if (token) {
          //     this.getUserMapMarks().subscribe(
          //       async value => {
          //         console.log(value);
          //         this.user = token;
          //         this.ListMarker=value as any;
          //         this.notifyService.showSuccess("Bienvenue!", "TELEFRET")
          //       },
          //       error1 => {
          //         this.notifyService.showError("Veillez vous connecté!", "TELEFRET")
          //         this.location.go("");
          //         console.log(error1);
          //       }
          //     );
          // }else{
          // this.getUserByEmailPassword("telefret","Telefret@2020").subscribe(
          //   value => {
          //     console.log(value);
          //     this.ngxService.stop();
          //     if(value.hasOwnProperty('id')){
          //       this.addItem(JSON.stringify(value) );
          //       this.user = value;
          //       this.isAuth = true;
          //         // this.router.navigateByUrl('/user');
          //       this.notifyService.showSuccess("Bienvenue!", "TELEFRET")
          //     }
          //     else {
          //       this.notifyService.showError("Email ou mot de passe incorrect!", "TELEFRET");
          //       return;
          //     }
          //   },
          //   error => {
          //     console.log(error);
          //     this.ngxService.stop();
          //     this.notifyService.showError("Email ou mot de passe incorrect!", "TELEFRET")
          //   }
          // )
        }
      }]);

      return UserService;
    }();

    UserService.ɵprov = _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵdefineInjectable"]({
      factory: function UserService_Factory() {
        return new UserService(_angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵinject"](_angular_common_http__WEBPACK_IMPORTED_MODULE_0__["HttpClient"]), _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵinject"](_base_auth_service__WEBPACK_IMPORTED_MODULE_3__["BaseAuthService"]), _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵinject"](_angular_router__WEBPACK_IMPORTED_MODULE_4__["Router"]), _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵinject"](_notification_service___WEBPACK_IMPORTED_MODULE_5__["NotificationService"]), _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵinject"](ngx_ui_loader__WEBPACK_IMPORTED_MODULE_6__["NgxUiLoaderService"]), _angular_core__WEBPACK_IMPORTED_MODULE_2__["ɵɵinject"](_angular_common__WEBPACK_IMPORTED_MODULE_7__["Location"]));
      },
      token: UserService,
      providedIn: "root"
    });
    /***/
  },

  /***/
  "./src/app/views/front/confirmation-dialog/confirmation-dialog.component.ts":
  /*!**********************************************************************************!*\
    !*** ./src/app/views/front/confirmation-dialog/confirmation-dialog.component.ts ***!
    \**********************************************************************************/

  /*! exports provided: ConfirmationDialogComponent */

  /***/
  function srcAppViewsFrontConfirmationDialogConfirmationDialogComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "ConfirmationDialogComponent", function () {
      return ConfirmationDialogComponent;
    });

    var ConfirmationDialogComponent = /*#__PURE__*/function () {
      function ConfirmationDialogComponent(activeModal) {
        _classCallCheck(this, ConfirmationDialogComponent);

        this.activeModal = activeModal;
      }

      _createClass(ConfirmationDialogComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {}
      }, {
        key: "decline",
        value: function decline() {
          this.activeModal.close(false);
        }
      }, {
        key: "accept",
        value: function accept() {
          this.activeModal.close(true);
        }
      }, {
        key: "dismiss",
        value: function dismiss() {
          this.activeModal.dismiss();
        }
      }]);

      return ConfirmationDialogComponent;
    }();
    /***/

  },

  /***/
  "./src/app/views/front/home/home-footer/home-footer.component.css.shim.ngstyle.js":
  /*!****************************************************************************************!*\
    !*** ./src/app/views/front/home/home-footer/home-footer.component.css.shim.ngstyle.js ***!
    \****************************************************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppViewsFrontHomeHomeFooterHomeFooterComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3ZpZXdzL2Zyb250L2hvbWUvaG9tZS1mb290ZXIvaG9tZS1mb290ZXIuY29tcG9uZW50LmNzcyJ9 */"];
    /***/
  },

  /***/
  "./src/app/views/front/home/home-footer/home-footer.component.ngfactory.js":
  /*!*********************************************************************************!*\
    !*** ./src/app/views/front/home/home-footer/home-footer.component.ngfactory.js ***!
    \*********************************************************************************/

  /*! exports provided: RenderType_HomeFooterComponent, View_HomeFooterComponent_0, View_HomeFooterComponent_Host_0, HomeFooterComponentNgFactory */

  /***/
  function srcAppViewsFrontHomeHomeFooterHomeFooterComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_HomeFooterComponent", function () {
      return RenderType_HomeFooterComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_HomeFooterComponent_0", function () {
      return View_HomeFooterComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_HomeFooterComponent_Host_0", function () {
      return View_HomeFooterComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "HomeFooterComponentNgFactory", function () {
      return HomeFooterComponentNgFactory;
    });
    /* harmony import */


    var _home_footer_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./home-footer.component.css.shim.ngstyle */
    "./src/app/views/front/home/home-footer/home-footer.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _home_footer_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ./home-footer.component */
    "./src/app/views/front/home/home-footer/home-footer.component.ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_HomeFooterComponent = [_home_footer_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_HomeFooterComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_HomeFooterComponent,
      data: {}
    });

    function View_HomeFooterComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 13, "footer", [["class", "footer"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](1, 0, null, null, 12, "div", [["class", "copy-right_text wow fadeInUp"], ["data-wow-delay", ".3s"], ["data-wow-duration", "1.4s"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 11, "div", [["class", "container"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](3, 0, null, null, 0, "div", [["class", "footer_border"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](4, 0, null, null, 9, "div", [["class", "row"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](5, 0, null, null, 8, "div", [["class", "col-xl-12"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](6, 0, null, null, 7, "p", [["class", "copy_right text-center"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](7, 0, null, null, 0, "br", [], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, [" Copyright \xA9 "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, [" All rights reserved | Scored "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](10, 0, null, null, 0, "i", [["aria-hidden", "true"], ["class", "fa fa-heart-o"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, [" by "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](12, 0, null, null, 1, "a", [["href", "#"], ["target", "_blank"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["2N"]))], null, null);
    }

    function View_HomeFooterComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-home-footer", [], null, null, null, View_HomeFooterComponent_0, RenderType_HomeFooterComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _home_footer_component__WEBPACK_IMPORTED_MODULE_2__["HomeFooterComponent"], [], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var HomeFooterComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-home-footer", _home_footer_component__WEBPACK_IMPORTED_MODULE_2__["HomeFooterComponent"], View_HomeFooterComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/views/front/home/home-footer/home-footer.component.ts":
  /*!***********************************************************************!*\
    !*** ./src/app/views/front/home/home-footer/home-footer.component.ts ***!
    \***********************************************************************/

  /*! exports provided: HomeFooterComponent */

  /***/
  function srcAppViewsFrontHomeHomeFooterHomeFooterComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "HomeFooterComponent", function () {
      return HomeFooterComponent;
    });

    var HomeFooterComponent = /*#__PURE__*/function () {
      function HomeFooterComponent() {
        _classCallCheck(this, HomeFooterComponent);
      }

      _createClass(HomeFooterComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {}
      }]);

      return HomeFooterComponent;
    }();
    /***/

  },

  /***/
  "./src/app/views/front/home/home-header/home-header.component.css.shim.ngstyle.js":
  /*!****************************************************************************************!*\
    !*** ./src/app/views/front/home/home-header/home-header.component.css.shim.ngstyle.js ***!
    \****************************************************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppViewsFrontHomeHomeHeaderHomeHeaderComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3ZpZXdzL2Zyb250L2hvbWUvaG9tZS1oZWFkZXIvaG9tZS1oZWFkZXIuY29tcG9uZW50LmNzcyJ9 */"];
    /***/
  },

  /***/
  "./src/app/views/front/home/home-header/home-header.component.ngfactory.js":
  /*!*********************************************************************************!*\
    !*** ./src/app/views/front/home/home-header/home-header.component.ngfactory.js ***!
    \*********************************************************************************/

  /*! exports provided: RenderType_HomeHeaderComponent, View_HomeHeaderComponent_0, View_HomeHeaderComponent_Host_0, HomeHeaderComponentNgFactory */

  /***/
  function srcAppViewsFrontHomeHomeHeaderHomeHeaderComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_HomeHeaderComponent", function () {
      return RenderType_HomeHeaderComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_HomeHeaderComponent_0", function () {
      return View_HomeHeaderComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_HomeHeaderComponent_Host_0", function () {
      return View_HomeHeaderComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "HomeHeaderComponentNgFactory", function () {
      return HomeHeaderComponentNgFactory;
    });
    /* harmony import */


    var _home_header_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./home-header.component.css.shim.ngstyle */
    "./src/app/views/front/home/home-header/home-header.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");
    /* harmony import */


    var _angular_common__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! @angular/common */
    "./node_modules/@angular/common/fesm2015/common.js");
    /* harmony import */


    var _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! @ng-bootstrap/ng-bootstrap */
    "./node_modules/@ng-bootstrap/ng-bootstrap/fesm2015/ng-bootstrap.js");
    /* harmony import */


    var _home_header_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! ./home-header.component */
    "./src/app/views/front/home/home-header/home-header.component.ts");
    /* harmony import */


    var _services_user_service__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! ../../../../services/user.service */
    "./src/app/services/user.service.ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_HomeHeaderComponent = [_home_header_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_HomeHeaderComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_HomeHeaderComponent,
      data: {}
    });

    function View_HomeHeaderComponent_1(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 3, "ul", [["class", "navbar-nav ml-2"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](1, 0, null, null, 2, "li", [["class", "nav-item"], ["style", "cursor: pointer"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 1, "a", [["class", "nav-link text-white"]], null, [[null, "click"]], function (_v, en, $event) {
        var ad = true;
        var _co = _v.component;

        if ("click" === en) {
          var pd_0 = _co.logOut() !== false;
          ad = pd_0 && ad;
        }

        return ad;
      }, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Log out"]))], null, null);
    }

    function View_HomeHeaderComponent_2(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 4, "ul", [["class", "navbar-nav"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](1, 0, null, null, 3, "li", [["class", "nav-item boxed-btn3"], ["style", "padding:2px!important;"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 2, "a", [["class", "nav-link text-white"], ["routerLink", "/user"]], [[1, "target", 0], [8, "href", 4]], [[null, "click"]], function (_v, en, $event) {
        var ad = true;

        if ("click" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 3).onClick($event.button, $event.ctrlKey, $event.metaKey, $event.shiftKey) !== false;
          ad = pd_0 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](3, 671744, null, 0, _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterLinkWithHref"], [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["ActivatedRoute"], _angular_common__WEBPACK_IMPORTED_MODULE_3__["LocationStrategy"]], {
        routerLink: [0, "routerLink"]
      }, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](4, null, ["", " ", ""]))], function (_ck, _v) {
        var currVal_2 = "/user";

        _ck(_v, 3, 0, currVal_2);
      }, function (_ck, _v) {
        var _co = _v.component;

        var currVal_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 3).target;

        var currVal_1 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 3).href;

        _ck(_v, 2, 0, currVal_0, currVal_1);

        var currVal_3 = _co.userService.user ? _co.userService.user.username : "";
        var currVal_4 = _co.userService.user ? _co.userService.user.email : "MON COMPTE";

        _ck(_v, 4, 0, currVal_3, currVal_4);
      });
    }

    function View_HomeHeaderComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 22, "nav", [["class", "navbar navbar-expand-lg navbar-dark bg-primary fixed-top text-white"]], null, null, null, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 16384, null, 0, _ng_bootstrap_ng_bootstrap__WEBPACK_IMPORTED_MODULE_4__["NgbNavbar"], [], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 20, "div", [["class", "container-fluid"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](3, 0, null, null, 5, "div", [["class", "d-flex justify-content-between"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](4, 0, null, null, 2, "a", [["class", "navbar-brand"], ["routerLink", "/"]], [[1, "target", 0], [8, "href", 4]], [[null, "click"]], function (_v, en, $event) {
        var ad = true;

        if ("click" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 5).onClick($event.button, $event.ctrlKey, $event.metaKey, $event.shiftKey) !== false;
          ad = pd_0 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](5, 671744, null, 0, _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterLinkWithHref"], [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["ActivatedRoute"], _angular_common__WEBPACK_IMPORTED_MODULE_3__["LocationStrategy"]], {
        routerLink: [0, "routerLink"]
      }, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](6, 0, null, null, 0, "img", [["alt", ""], ["src", "../../../../../assets/images/logo.png"], ["style", "max-height: 160px; max-width: 20%"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](7, 0, null, null, 1, "button", [["aria-controls", "navbarResponsive"], ["aria-expanded", "false"], ["aria-label", "Toggle navigation"], ["class", "navbar-toggler"], ["data-target", "#navbarResponsive"], ["data-toggle", "collapse"], ["type", "button"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](8, 0, null, null, 0, "span", [["class", "navbar-toggler-icon"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](9, 0, null, null, 13, "div", [["class", "collapse navbar-collapse"], ["id", "navbarResponsive"], ["style", "font-size: 14px"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](10, 0, null, null, 8, "ul", [["class", "navbar-nav ml-2"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](11, 0, null, null, 3, "li", [["class", "nav-item"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](12, 0, null, null, 2, "a", [["class", "nav-link text-white"], ["routerLink", "/"]], [[1, "target", 0], [8, "href", 4]], [[null, "click"]], function (_v, en, $event) {
        var ad = true;

        if ("click" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 13).onClick($event.button, $event.ctrlKey, $event.metaKey, $event.shiftKey) !== false;
          ad = pd_0 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](13, 671744, null, 0, _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterLinkWithHref"], [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["ActivatedRoute"], _angular_common__WEBPACK_IMPORTED_MODULE_3__["LocationStrategy"]], {
        routerLink: [0, "routerLink"]
      }, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Accueil"])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](15, 0, null, null, 3, "li", [["class", "nav-item"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](16, 0, null, null, 2, "a", [["class", "nav-link text-white"], ["routerLink", "/user"]], [[1, "target", 0], [8, "href", 4]], [[null, "click"]], function (_v, en, $event) {
        var ad = true;

        if ("click" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 17).onClick($event.button, $event.ctrlKey, $event.metaKey, $event.shiftKey) !== false;
          ad = pd_0 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](17, 671744, null, 0, _angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterLinkWithHref"], [_angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["ActivatedRoute"], _angular_common__WEBPACK_IMPORTED_MODULE_3__["LocationStrategy"]], {
        routerLink: [0, "routerLink"]
      }, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Trouver un packet"])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵand"](16777216, null, null, 1, null, View_HomeHeaderComponent_1)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](20, 16384, null, 0, _angular_common__WEBPACK_IMPORTED_MODULE_3__["NgIf"], [_angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["TemplateRef"]], {
        ngIf: [0, "ngIf"]
      }, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵand"](16777216, null, null, 1, null, View_HomeHeaderComponent_2)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](22, 16384, null, 0, _angular_common__WEBPACK_IMPORTED_MODULE_3__["NgIf"], [_angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["TemplateRef"]], {
        ngIf: [0, "ngIf"]
      }, null)], function (_ck, _v) {
        var _co = _v.component;
        var currVal_2 = "/";

        _ck(_v, 5, 0, currVal_2);

        var currVal_5 = "/";

        _ck(_v, 13, 0, currVal_5);

        var currVal_8 = "/user";

        _ck(_v, 17, 0, currVal_8);

        var currVal_9 = _co.userService.user;

        _ck(_v, 20, 0, currVal_9);

        var currVal_10 = _co.userService.user;

        _ck(_v, 22, 0, currVal_10);
      }, function (_ck, _v) {
        var currVal_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 5).target;

        var currVal_1 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 5).href;

        _ck(_v, 4, 0, currVal_0, currVal_1);

        var currVal_3 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 13).target;

        var currVal_4 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 13).href;

        _ck(_v, 12, 0, currVal_3, currVal_4);

        var currVal_6 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 17).target;

        var currVal_7 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 17).href;

        _ck(_v, 16, 0, currVal_6, currVal_7);
      });
    }

    function View_HomeHeaderComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-home-header", [], null, null, null, View_HomeHeaderComponent_0, RenderType_HomeHeaderComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _home_header_component__WEBPACK_IMPORTED_MODULE_5__["HomeHeaderComponent"], [_services_user_service__WEBPACK_IMPORTED_MODULE_6__["UserService"], _angular_router__WEBPACK_IMPORTED_MODULE_2__["Router"]], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var HomeHeaderComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-home-header", _home_header_component__WEBPACK_IMPORTED_MODULE_5__["HomeHeaderComponent"], View_HomeHeaderComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/views/front/home/home-header/home-header.component.ts":
  /*!***********************************************************************!*\
    !*** ./src/app/views/front/home/home-header/home-header.component.ts ***!
    \***********************************************************************/

  /*! exports provided: HomeHeaderComponent */

  /***/
  function srcAppViewsFrontHomeHomeHeaderHomeHeaderComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "HomeHeaderComponent", function () {
      return HomeHeaderComponent;
    });

    var HomeHeaderComponent = /*#__PURE__*/function () {
      function HomeHeaderComponent(userService, router) {
        _classCallCheck(this, HomeHeaderComponent);

        this.userService = userService;
        this.router = router;
      }

      _createClass(HomeHeaderComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {}
      }, {
        key: "logOut",
        value: function logOut() {
          this.userService.logOut();
          this.router.navigateByUrl('/');
        }
      }]);

      return HomeHeaderComponent;
    }();
    /***/

  },

  /***/
  "./src/app/views/front/home/home-not-found/home-not-found.component.css.shim.ngstyle.js":
  /*!**********************************************************************************************!*\
    !*** ./src/app/views/front/home/home-not-found/home-not-found.component.css.shim.ngstyle.js ***!
    \**********************************************************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppViewsFrontHomeHomeNotFoundHomeNotFoundComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3ZpZXdzL2Zyb250L2hvbWUvaG9tZS1ub3QtZm91bmQvaG9tZS1ub3QtZm91bmQuY29tcG9uZW50LmNzcyJ9 */"];
    /***/
  },

  /***/
  "./src/app/views/front/home/home-not-found/home-not-found.component.ngfactory.js":
  /*!***************************************************************************************!*\
    !*** ./src/app/views/front/home/home-not-found/home-not-found.component.ngfactory.js ***!
    \***************************************************************************************/

  /*! exports provided: RenderType_HomeNotFoundComponent, View_HomeNotFoundComponent_0, View_HomeNotFoundComponent_Host_0, HomeNotFoundComponentNgFactory */

  /***/
  function srcAppViewsFrontHomeHomeNotFoundHomeNotFoundComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_HomeNotFoundComponent", function () {
      return RenderType_HomeNotFoundComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_HomeNotFoundComponent_0", function () {
      return View_HomeNotFoundComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_HomeNotFoundComponent_Host_0", function () {
      return View_HomeNotFoundComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "HomeNotFoundComponentNgFactory", function () {
      return HomeNotFoundComponentNgFactory;
    });
    /* harmony import */


    var _home_not_found_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./home-not-found.component.css.shim.ngstyle */
    "./src/app/views/front/home/home-not-found/home-not-found.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _home_not_found_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ./home-not-found.component */
    "./src/app/views/front/home/home-not-found/home-not-found.component.ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_HomeNotFoundComponent = [_home_not_found_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_HomeNotFoundComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_HomeNotFoundComponent,
      data: {}
    });

    function View_HomeNotFoundComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "p", [], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["home-not-found works!"]))], null, null);
    }

    function View_HomeNotFoundComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-home-not-found", [], null, null, null, View_HomeNotFoundComponent_0, RenderType_HomeNotFoundComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _home_not_found_component__WEBPACK_IMPORTED_MODULE_2__["HomeNotFoundComponent"], [], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var HomeNotFoundComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-home-not-found", _home_not_found_component__WEBPACK_IMPORTED_MODULE_2__["HomeNotFoundComponent"], View_HomeNotFoundComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/views/front/home/home-not-found/home-not-found.component.ts":
  /*!*****************************************************************************!*\
    !*** ./src/app/views/front/home/home-not-found/home-not-found.component.ts ***!
    \*****************************************************************************/

  /*! exports provided: HomeNotFoundComponent */

  /***/
  function srcAppViewsFrontHomeHomeNotFoundHomeNotFoundComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "HomeNotFoundComponent", function () {
      return HomeNotFoundComponent;
    });

    var HomeNotFoundComponent = /*#__PURE__*/function () {
      function HomeNotFoundComponent() {
        _classCallCheck(this, HomeNotFoundComponent);
      }

      _createClass(HomeNotFoundComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {}
      }]);

      return HomeNotFoundComponent;
    }();
    /***/

  },

  /***/
  "./src/app/views/front/user/user-candidate/user-candidate.component.css.shim.ngstyle.js":
  /*!**********************************************************************************************!*\
    !*** ./src/app/views/front/user/user-candidate/user-candidate.component.css.shim.ngstyle.js ***!
    \**********************************************************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppViewsFrontUserUserCandidateUserCandidateComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3ZpZXdzL2Zyb250L3VzZXIvdXNlci1jYW5kaWRhdGUvdXNlci1jYW5kaWRhdGUuY29tcG9uZW50LmNzcyJ9 */"];
    /***/
  },

  /***/
  "./src/app/views/front/user/user-candidate/user-candidate.component.ngfactory.js":
  /*!***************************************************************************************!*\
    !*** ./src/app/views/front/user/user-candidate/user-candidate.component.ngfactory.js ***!
    \***************************************************************************************/

  /*! exports provided: RenderType_UserCandidateComponent, View_UserCandidateComponent_0, View_UserCandidateComponent_Host_0, UserCandidateComponentNgFactory */

  /***/
  function srcAppViewsFrontUserUserCandidateUserCandidateComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_UserCandidateComponent", function () {
      return RenderType_UserCandidateComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserCandidateComponent_0", function () {
      return View_UserCandidateComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserCandidateComponent_Host_0", function () {
      return View_UserCandidateComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserCandidateComponentNgFactory", function () {
      return UserCandidateComponentNgFactory;
    });
    /* harmony import */


    var _user_candidate_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./user-candidate.component.css.shim.ngstyle */
    "./src/app/views/front/user/user-candidate/user-candidate.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _home_home_header_home_header_component_ngfactory__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ../../home/home-header/home-header.component.ngfactory */
    "./src/app/views/front/home/home-header/home-header.component.ngfactory.js");
    /* harmony import */


    var _home_home_header_home_header_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! ../../home/home-header/home-header.component */
    "./src/app/views/front/home/home-header/home-header.component.ts");
    /* harmony import */


    var _services_user_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! ../../../../services/user.service */
    "./src/app/services/user.service.ts");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");
    /* harmony import */


    var _home_home_footer_home_footer_component_ngfactory__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! ../../home/home-footer/home-footer.component.ngfactory */
    "./src/app/views/front/home/home-footer/home-footer.component.ngfactory.js");
    /* harmony import */


    var _home_home_footer_home_footer_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
    /*! ../../home/home-footer/home-footer.component */
    "./src/app/views/front/home/home-footer/home-footer.component.ts");
    /* harmony import */


    var _user_candidate_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
    /*! ./user-candidate.component */
    "./src/app/views/front/user/user-candidate/user-candidate.component.ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_UserCandidateComponent = [_user_candidate_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_UserCandidateComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_UserCandidateComponent,
      data: {}
    });

    function View_UserCandidateComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-home-header", [], null, null, null, _home_home_header_home_header_component_ngfactory__WEBPACK_IMPORTED_MODULE_2__["View_HomeHeaderComponent_0"], _home_home_header_home_header_component_ngfactory__WEBPACK_IMPORTED_MODULE_2__["RenderType_HomeHeaderComponent"])), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _home_home_header_home_header_component__WEBPACK_IMPORTED_MODULE_3__["HomeHeaderComponent"], [_services_user_service__WEBPACK_IMPORTED_MODULE_4__["UserService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"]], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 1, "app-home-footer", [], null, null, null, _home_home_footer_home_footer_component_ngfactory__WEBPACK_IMPORTED_MODULE_6__["View_HomeFooterComponent_0"], _home_home_footer_home_footer_component_ngfactory__WEBPACK_IMPORTED_MODULE_6__["RenderType_HomeFooterComponent"])), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](3, 114688, null, 0, _home_home_footer_home_footer_component__WEBPACK_IMPORTED_MODULE_7__["HomeFooterComponent"], [], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);

        _ck(_v, 3, 0);
      }, null);
    }

    function View_UserCandidateComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-user-candidate", [], null, null, null, View_UserCandidateComponent_0, RenderType_UserCandidateComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _user_candidate_component__WEBPACK_IMPORTED_MODULE_8__["UserCandidateComponent"], [], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var UserCandidateComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-user-candidate", _user_candidate_component__WEBPACK_IMPORTED_MODULE_8__["UserCandidateComponent"], View_UserCandidateComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/views/front/user/user-candidate/user-candidate.component.ts":
  /*!*****************************************************************************!*\
    !*** ./src/app/views/front/user/user-candidate/user-candidate.component.ts ***!
    \*****************************************************************************/

  /*! exports provided: UserCandidateComponent */

  /***/
  function srcAppViewsFrontUserUserCandidateUserCandidateComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserCandidateComponent", function () {
      return UserCandidateComponent;
    });

    var UserCandidateComponent = /*#__PURE__*/function () {
      function UserCandidateComponent() {
        _classCallCheck(this, UserCandidateComponent);
      }

      _createClass(UserCandidateComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {}
      }]);

      return UserCandidateComponent;
    }();
    /***/

  },

  /***/
  "./src/app/views/front/user/user-details/user-details.component.css.shim.ngstyle.js":
  /*!******************************************************************************************!*\
    !*** ./src/app/views/front/user/user-details/user-details.component.css.shim.ngstyle.js ***!
    \******************************************************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppViewsFrontUserUserDetailsUserDetailsComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3ZpZXdzL2Zyb250L3VzZXIvdXNlci1kZXRhaWxzL3VzZXItZGV0YWlscy5jb21wb25lbnQuY3NzIn0= */"];
    /***/
  },

  /***/
  "./src/app/views/front/user/user-details/user-details.component.ngfactory.js":
  /*!***********************************************************************************!*\
    !*** ./src/app/views/front/user/user-details/user-details.component.ngfactory.js ***!
    \***********************************************************************************/

  /*! exports provided: RenderType_UserDetailsComponent, View_UserDetailsComponent_0, View_UserDetailsComponent_Host_0, UserDetailsComponentNgFactory */

  /***/
  function srcAppViewsFrontUserUserDetailsUserDetailsComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_UserDetailsComponent", function () {
      return RenderType_UserDetailsComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserDetailsComponent_0", function () {
      return View_UserDetailsComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserDetailsComponent_Host_0", function () {
      return View_UserDetailsComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserDetailsComponentNgFactory", function () {
      return UserDetailsComponentNgFactory;
    });
    /* harmony import */


    var _user_details_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./user-details.component.css.shim.ngstyle */
    "./src/app/views/front/user/user-details/user-details.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _user_details_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ./user-details.component */
    "./src/app/views/front/user/user-details/user-details.component.ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_UserDetailsComponent = [_user_details_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_UserDetailsComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_UserDetailsComponent,
      data: {}
    });

    function View_UserDetailsComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [], null, null);
    }

    function View_UserDetailsComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-user-details", [], null, null, null, View_UserDetailsComponent_0, RenderType_UserDetailsComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _user_details_component__WEBPACK_IMPORTED_MODULE_2__["UserDetailsComponent"], [], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var UserDetailsComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-user-details", _user_details_component__WEBPACK_IMPORTED_MODULE_2__["UserDetailsComponent"], View_UserDetailsComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/views/front/user/user-details/user-details.component.ts":
  /*!*************************************************************************!*\
    !*** ./src/app/views/front/user/user-details/user-details.component.ts ***!
    \*************************************************************************/

  /*! exports provided: UserDetailsComponent */

  /***/
  function srcAppViewsFrontUserUserDetailsUserDetailsComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserDetailsComponent", function () {
      return UserDetailsComponent;
    });

    var UserDetailsComponent = /*#__PURE__*/function () {
      function UserDetailsComponent() {
        _classCallCheck(this, UserDetailsComponent);

        this.Taux = 0;
      }

      _createClass(UserDetailsComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {
          throw new Error('Method not implemented.');
        }
      }]);

      return UserDetailsComponent;
    }();
    /***/

  },

  /***/
  "./src/app/views/front/user/user-login/user-login.component.css.shim.ngstyle.js":
  /*!**************************************************************************************!*\
    !*** ./src/app/views/front/user/user-login/user-login.component.css.shim.ngstyle.js ***!
    \**************************************************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppViewsFrontUserUserLoginUserLoginComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = ["\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL3ZpZXdzL2Zyb250L3VzZXIvdXNlci1sb2dpbi91c2VyLWxvZ2luLmNvbXBvbmVudC5jc3MifQ== */"];
    /***/
  },

  /***/
  "./src/app/views/front/user/user-login/user-login.component.ngfactory.js":
  /*!*******************************************************************************!*\
    !*** ./src/app/views/front/user/user-login/user-login.component.ngfactory.js ***!
    \*******************************************************************************/

  /*! exports provided: RenderType_UserLoginComponent, View_UserLoginComponent_0, View_UserLoginComponent_Host_0, UserLoginComponentNgFactory */

  /***/
  function srcAppViewsFrontUserUserLoginUserLoginComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_UserLoginComponent", function () {
      return RenderType_UserLoginComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserLoginComponent_0", function () {
      return View_UserLoginComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserLoginComponent_Host_0", function () {
      return View_UserLoginComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserLoginComponentNgFactory", function () {
      return UserLoginComponentNgFactory;
    });
    /* harmony import */


    var _user_login_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./user-login.component.css.shim.ngstyle */
    "./src/app/views/front/user/user-login/user-login.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _home_home_header_home_header_component_ngfactory__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ../../home/home-header/home-header.component.ngfactory */
    "./src/app/views/front/home/home-header/home-header.component.ngfactory.js");
    /* harmony import */


    var _home_home_header_home_header_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! ../../home/home-header/home-header.component */
    "./src/app/views/front/home/home-header/home-header.component.ts");
    /* harmony import */


    var _services_user_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! ../../../../services/user.service */
    "./src/app/services/user.service.ts");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");
    /* harmony import */


    var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! @angular/forms */
    "./node_modules/@angular/forms/fesm2015/forms.js");
    /* harmony import */


    var _angular_common__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
    /*! @angular/common */
    "./node_modules/@angular/common/fesm2015/common.js");
    /* harmony import */


    var _home_home_footer_home_footer_component_ngfactory__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
    /*! ../../home/home-footer/home-footer.component.ngfactory */
    "./src/app/views/front/home/home-footer/home-footer.component.ngfactory.js");
    /* harmony import */


    var _home_home_footer_home_footer_component__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
    /*! ../../home/home-footer/home-footer.component */
    "./src/app/views/front/home/home-footer/home-footer.component.ts");
    /* harmony import */


    var _user_login_component__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
    /*! ./user-login.component */
    "./src/app/views/front/user/user-login/user-login.component.ts");
    /* harmony import */


    var ngx_ui_loader__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(
    /*! ngx-ui-loader */
    "./node_modules/ngx-ui-loader/fesm2015/ngx-ui-loader.js");
    /* harmony import */


    var _services_notification_service___WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(
    /*! ../../../../services/notification.service  */
    "./src/app/services/notification.service .ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_UserLoginComponent = [_user_login_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_UserLoginComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_UserLoginComponent,
      data: {}
    });

    function View_UserLoginComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-home-header", [], null, null, null, _home_home_header_home_header_component_ngfactory__WEBPACK_IMPORTED_MODULE_2__["View_HomeHeaderComponent_0"], _home_home_header_home_header_component_ngfactory__WEBPACK_IMPORTED_MODULE_2__["RenderType_HomeHeaderComponent"])), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _home_home_header_home_header_component__WEBPACK_IMPORTED_MODULE_3__["HomeHeaderComponent"], [_services_user_service__WEBPACK_IMPORTED_MODULE_4__["UserService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"]], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 6, "div", [["class", "bradcam_area bradcam_bg_1"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](3, 0, null, null, 5, "div", [["class", "container"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](4, 0, null, null, 4, "div", [["class", "row"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](5, 0, null, null, 3, "div", [["class", "col-xl-12"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](6, 0, null, null, 2, "div", [["class", "bradcam_text"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](7, 0, null, null, 1, "h3", [], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Connectez-vous"])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](9, 0, null, null, 38, "section", [["class", "blog_area single-post-area"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](10, 0, null, null, 37, "div", [["class", "container"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](11, 0, null, null, 36, "div", [["class", "row"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](12, 0, null, null, 35, "div", [["class", "col-lg-8 posts-list"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](13, 0, null, null, 34, "div", [["class", "comment-form"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](14, 0, null, null, 1, "h4", [], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Connectez-vous!!"])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](16, 0, null, null, 31, "form", [["class", "form-contact comment_form"], ["id", "commentForm"], ["novalidate", ""]], [[2, "ng-untouched", null], [2, "ng-touched", null], [2, "ng-pristine", null], [2, "ng-dirty", null], [2, "ng-valid", null], [2, "ng-invalid", null], [2, "ng-pending", null]], [[null, "ngSubmit"], [null, "submit"], [null, "reset"]], function (_v, en, $event) {
        var ad = true;
        var _co = _v.component;

        if ("submit" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 18).onSubmit($event) !== false;
          ad = pd_0 && ad;
        }

        if ("reset" === en) {
          var pd_1 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 18).onReset() !== false;
          ad = pd_1 && ad;
        }

        if ("ngSubmit" === en) {
          var pd_2 = _co.onSubmit() !== false;
          ad = pd_2 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](17, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ɵangular_packages_forms_forms_y"], [], null, null), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](18, 4210688, [["f", 4]], 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgForm"], [[8, null], [8, null]], null, {
        ngSubmit: "ngSubmit"
      }), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](2048, null, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ControlContainer"], null, [_angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgForm"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](20, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgControlStatusGroup"], [[4, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ControlContainer"]]], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](21, 0, null, null, 20, "div", [["class", "row"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](22, 0, null, null, 9, "div", [["class", "col-sm-12"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](23, 0, null, null, 8, "div", [["class", "form-group"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](24, 0, null, null, 7, "input", [["class", "form-control"], ["id", "email"], ["name", "email"], ["placeholder", "Email"], ["required", ""], ["type", "email"]], [[1, "required", 0], [2, "ng-untouched", null], [2, "ng-touched", null], [2, "ng-pristine", null], [2, "ng-dirty", null], [2, "ng-valid", null], [2, "ng-invalid", null], [2, "ng-pending", null]], [[null, "ngModelChange"], [null, "input"], [null, "blur"], [null, "compositionstart"], [null, "compositionend"]], function (_v, en, $event) {
        var ad = true;
        var _co = _v.component;

        if ("input" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 25)._handleInput($event.target.value) !== false;
          ad = pd_0 && ad;
        }

        if ("blur" === en) {
          var pd_1 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 25).onTouched() !== false;
          ad = pd_1 && ad;
        }

        if ("compositionstart" === en) {
          var pd_2 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 25)._compositionStart() !== false;
          ad = pd_2 && ad;
        }

        if ("compositionend" === en) {
          var pd_3 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 25)._compositionEnd($event.target.value) !== false;
          ad = pd_3 && ad;
        }

        if ("ngModelChange" === en) {
          var pd_4 = (_co.user.email = $event) !== false;
          ad = pd_4 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](25, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["DefaultValueAccessor"], [_angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["ElementRef"], [2, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["COMPOSITION_BUFFER_MODE"]]], null, null), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](26, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["RequiredValidator"], [], {
        required: [0, "required"]
      }, null), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](1024, null, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALIDATORS"], function (p0_0) {
        return [p0_0];
      }, [_angular_forms__WEBPACK_IMPORTED_MODULE_6__["RequiredValidator"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](1024, null, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALUE_ACCESSOR"], function (p0_0) {
        return [p0_0];
      }, [_angular_forms__WEBPACK_IMPORTED_MODULE_6__["DefaultValueAccessor"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](29, 671744, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgModel"], [[2, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ControlContainer"]], [6, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALIDATORS"]], [8, null], [6, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALUE_ACCESSOR"]]], {
        name: [0, "name"],
        model: [1, "model"]
      }, {
        update: "ngModelChange"
      }), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](2048, null, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgControl"], null, [_angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgModel"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](31, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgControlStatus"], [[4, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgControl"]]], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](32, 0, null, null, 9, "div", [["class", "col-12"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](33, 0, null, null, 8, "div", [["class", "form-group"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](34, 0, null, null, 7, "input", [["class", "form-control"], ["id", "password"], ["name", "password"], ["placeholder", "Mot de passe"], ["required", ""], ["type", "password"]], [[1, "required", 0], [2, "ng-untouched", null], [2, "ng-touched", null], [2, "ng-pristine", null], [2, "ng-dirty", null], [2, "ng-valid", null], [2, "ng-invalid", null], [2, "ng-pending", null]], [[null, "ngModelChange"], [null, "input"], [null, "blur"], [null, "compositionstart"], [null, "compositionend"]], function (_v, en, $event) {
        var ad = true;
        var _co = _v.component;

        if ("input" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 35)._handleInput($event.target.value) !== false;
          ad = pd_0 && ad;
        }

        if ("blur" === en) {
          var pd_1 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 35).onTouched() !== false;
          ad = pd_1 && ad;
        }

        if ("compositionstart" === en) {
          var pd_2 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 35)._compositionStart() !== false;
          ad = pd_2 && ad;
        }

        if ("compositionend" === en) {
          var pd_3 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 35)._compositionEnd($event.target.value) !== false;
          ad = pd_3 && ad;
        }

        if ("ngModelChange" === en) {
          var pd_4 = (_co.user.password = $event) !== false;
          ad = pd_4 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](35, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["DefaultValueAccessor"], [_angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["ElementRef"], [2, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["COMPOSITION_BUFFER_MODE"]]], null, null), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](36, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["RequiredValidator"], [], {
        required: [0, "required"]
      }, null), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](1024, null, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALIDATORS"], function (p0_0) {
        return [p0_0];
      }, [_angular_forms__WEBPACK_IMPORTED_MODULE_6__["RequiredValidator"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](1024, null, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALUE_ACCESSOR"], function (p0_0) {
        return [p0_0];
      }, [_angular_forms__WEBPACK_IMPORTED_MODULE_6__["DefaultValueAccessor"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](39, 671744, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgModel"], [[2, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ControlContainer"]], [6, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALIDATORS"]], [8, null], [6, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NG_VALUE_ACCESSOR"]]], {
        name: [0, "name"],
        model: [1, "model"]
      }, {
        update: "ngModelChange"
      }), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](2048, null, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgControl"], null, [_angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgModel"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](41, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgControlStatus"], [[4, _angular_forms__WEBPACK_IMPORTED_MODULE_6__["NgControl"]]], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](42, 0, null, null, 5, "div", [["class", "form-group"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](43, 0, null, null, 1, "button", [["class", "button button-contactForm btn_1 boxed-btn3"], ["type", "submit"]], [[8, "disabled", 0]], null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Se connecter"])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](45, 0, null, null, 2, "a", [["class", "btn btn-link"], ["routerLink", "/register"], ["style", "text-decoration: underline"]], [[1, "target", 0], [8, "href", 4]], [[null, "click"]], function (_v, en, $event) {
        var ad = true;

        if ("click" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 46).onClick($event.button, $event.ctrlKey, $event.metaKey, $event.shiftKey) !== false;
          ad = pd_0 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](46, 671744, null, 0, _angular_router__WEBPACK_IMPORTED_MODULE_5__["RouterLinkWithHref"], [_angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"], _angular_common__WEBPACK_IMPORTED_MODULE_7__["LocationStrategy"]], {
        routerLink: [0, "routerLink"]
      }, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Je n'ai pas encore de compte"])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](48, 0, null, null, 1, "app-home-footer", [], null, null, null, _home_home_footer_home_footer_component_ngfactory__WEBPACK_IMPORTED_MODULE_8__["View_HomeFooterComponent_0"], _home_home_footer_home_footer_component_ngfactory__WEBPACK_IMPORTED_MODULE_8__["RenderType_HomeFooterComponent"])), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](49, 114688, null, 0, _home_home_footer_home_footer_component__WEBPACK_IMPORTED_MODULE_9__["HomeFooterComponent"], [], null, null)], function (_ck, _v) {
        var _co = _v.component;

        _ck(_v, 1, 0);

        var currVal_15 = "";

        _ck(_v, 26, 0, currVal_15);

        var currVal_16 = "email";
        var currVal_17 = _co.user.email;

        _ck(_v, 29, 0, currVal_16, currVal_17);

        var currVal_26 = "";

        _ck(_v, 36, 0, currVal_26);

        var currVal_27 = "password";
        var currVal_28 = _co.user.password;

        _ck(_v, 39, 0, currVal_27, currVal_28);

        var currVal_32 = "/register";

        _ck(_v, 46, 0, currVal_32);

        _ck(_v, 49, 0);
      }, function (_ck, _v) {
        var currVal_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassUntouched;

        var currVal_1 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassTouched;

        var currVal_2 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassPristine;

        var currVal_3 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassDirty;

        var currVal_4 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassValid;

        var currVal_5 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassInvalid;

        var currVal_6 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassPending;

        _ck(_v, 16, 0, currVal_0, currVal_1, currVal_2, currVal_3, currVal_4, currVal_5, currVal_6);

        var currVal_7 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 26).required ? "" : null;

        var currVal_8 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 31).ngClassUntouched;

        var currVal_9 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 31).ngClassTouched;

        var currVal_10 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 31).ngClassPristine;

        var currVal_11 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 31).ngClassDirty;

        var currVal_12 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 31).ngClassValid;

        var currVal_13 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 31).ngClassInvalid;

        var currVal_14 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 31).ngClassPending;

        _ck(_v, 24, 0, currVal_7, currVal_8, currVal_9, currVal_10, currVal_11, currVal_12, currVal_13, currVal_14);

        var currVal_18 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 36).required ? "" : null;

        var currVal_19 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 41).ngClassUntouched;

        var currVal_20 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 41).ngClassTouched;

        var currVal_21 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 41).ngClassPristine;

        var currVal_22 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 41).ngClassDirty;

        var currVal_23 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 41).ngClassValid;

        var currVal_24 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 41).ngClassInvalid;

        var currVal_25 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 41).ngClassPending;

        _ck(_v, 34, 0, currVal_18, currVal_19, currVal_20, currVal_21, currVal_22, currVal_23, currVal_24, currVal_25);

        var currVal_29 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 18).invalid;

        _ck(_v, 43, 0, currVal_29);

        var currVal_30 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 46).target;

        var currVal_31 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 46).href;

        _ck(_v, 45, 0, currVal_30, currVal_31);
      });
    }

    function View_UserLoginComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-user-login", [], null, null, null, View_UserLoginComponent_0, RenderType_UserLoginComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _user_login_component__WEBPACK_IMPORTED_MODULE_10__["UserLoginComponent"], [_services_user_service__WEBPACK_IMPORTED_MODULE_4__["UserService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["Router"], ngx_ui_loader__WEBPACK_IMPORTED_MODULE_11__["NgxUiLoaderService"], _services_notification_service___WEBPACK_IMPORTED_MODULE_12__["NotificationService"], _angular_router__WEBPACK_IMPORTED_MODULE_5__["ActivatedRoute"]], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var UserLoginComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-user-login", _user_login_component__WEBPACK_IMPORTED_MODULE_10__["UserLoginComponent"], View_UserLoginComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/views/front/user/user-login/user-login.component.ts":
  /*!*********************************************************************!*\
    !*** ./src/app/views/front/user/user-login/user-login.component.ts ***!
    \*********************************************************************/

  /*! exports provided: UserLoginComponent */

  /***/
  function srcAppViewsFrontUserUserLoginUserLoginComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserLoginComponent", function () {
      return UserLoginComponent;
    });
    /* harmony import */


    var _models_user__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ../../../../models/user */
    "./src/app/models/user.ts");

    var UserLoginComponent = /*#__PURE__*/function () {
      function UserLoginComponent(userService, router, ngxService, notifyService, route) {
        _classCallCheck(this, UserLoginComponent);

        this.userService = userService;
        this.router = router;
        this.ngxService = ngxService;
        this.notifyService = notifyService;
        this.route = route;
        this.user = new _models_user__WEBPACK_IMPORTED_MODULE_0__["User"]();
      }

      _createClass(UserLoginComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {}
      }, {
        key: "onSubmit",
        value: function onSubmit() {
          var _this = this;

          this.ngxService.start();
          this.userService.getUserByEmailPassword(this.user.email, this.user.password).subscribe(function (value) {
            console.log(value);

            _this.ngxService.stop();

            if (value.hasOwnProperty('id')) {
              _this.userService.addItem(JSON.stringify(value));

              _this.userService.user = value;
              _this.userService.isAuth = true;

              _this.router.navigateByUrl('/user');

              _this.notifyService.showSuccess("Bienvenue!", "TELEFRET");
            } else {
              _this.notifyService.showError("Email ou mot de passe incorrect!", "TELEFRET");

              return;
            }
          }, function (error) {
            console.log(error);

            _this.ngxService.stop();

            _this.notifyService.showError("Email ou mot de passe incorrect!", "TELEFRET");
          });
        }
      }]);

      return UserLoginComponent;
    }();
    /***/

  },

  /***/
  "./src/app/views/front/user/user.component.css.shim.ngstyle.js":
  /*!*********************************************************************!*\
    !*** ./src/app/views/front/user/user.component.css.shim.ngstyle.js ***!
    \*********************************************************************/

  /*! exports provided: styles */

  /***/
  function srcAppViewsFrontUserUserComponentCssShimNgstyleJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "styles", function () {
      return styles;
    });
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles = [".ol-popup[_ngcontent-%COMP%] {\r\n    position: absolute;\r\n    background-color: white;\r\n    filter: drop-shadow(0 1px 4px rgba(0,0,0,0.2));\r\n    padding: 15px;\r\n    border-radius: 10px;\r\n    border: 1px solid #cccccc;\r\n    bottom: 12px;\r\n    left: -50px;\r\n    min-width: 280px;\r\n  }\r\n  .ol-popup[_ngcontent-%COMP%]:after, .ol-popup[_ngcontent-%COMP%]:before {\r\n    top: 100%;\r\n    border: solid transparent;\r\n    content: \" \";\r\n    height: 0;\r\n    width: 0;\r\n    position: absolute;\r\n    pointer-events: none;\r\n  }\r\n  .ol-popup[_ngcontent-%COMP%]:after {\r\n    border-top-color: white;\r\n    border-width: 10px;\r\n    left: 48px;\r\n    margin-left: -10px;\r\n  }\r\n  .ol-popup[_ngcontent-%COMP%]:before {\r\n    border-top-color: #cccccc;\r\n    border-width: 11px;\r\n    left: 48px;\r\n    margin-left: -11px;\r\n  }\r\n  .ol-popup-closer[_ngcontent-%COMP%] {\r\n    text-decoration: none;\r\n    position: absolute;\r\n    top: 2px;\r\n    right: 8px;\r\n  }\r\n  .ol-popup-closer[_ngcontent-%COMP%]:after {\r\n    content: \"\u2716\";\r\n  }\r\n  .map[_ngcontent-%COMP%] {\r\n  height: 100vh;\r\n  width: 100%;\r\n  }\r\n  .wrapper[_ngcontent-%COMP%] {\r\n  display: flex;\r\n  flex-direction: column;\r\n  flex-flow: column wrap;\r\n  justify-content: space-between;\r\n  }\r\n  .content-area[_ngcontent-%COMP%] {\r\n  height: 100%;\r\n  }\r\n  .demo-area[_ngcontent-%COMP%] {\r\n  height: 100vh;\r\n  }\r\n  .demo-area1[_ngcontent-%COMP%] {\r\n    height: 0px;\r\n    }\r\n  .video-area[_ngcontent-%COMP%] {\r\n   height: 100%;\r\n  }\r\n  iframe[_ngcontent-%COMP%] {\r\n  height: 100vh;\r\n  overflow:hidden;\r\n  }\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvdmlld3MvZnJvbnQvdXNlci91c2VyLmNvbXBvbmVudC5jc3MiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7SUFDSSxrQkFBa0I7SUFDbEIsdUJBQXVCO0lBRXZCLDhDQUE4QztJQUM5QyxhQUFhO0lBQ2IsbUJBQW1CO0lBQ25CLHlCQUF5QjtJQUN6QixZQUFZO0lBQ1osV0FBVztJQUNYLGdCQUFnQjtFQUNsQjtFQUNBO0lBQ0UsU0FBUztJQUNULHlCQUF5QjtJQUN6QixZQUFZO0lBQ1osU0FBUztJQUNULFFBQVE7SUFDUixrQkFBa0I7SUFDbEIsb0JBQW9CO0VBQ3RCO0VBQ0E7SUFDRSx1QkFBdUI7SUFDdkIsa0JBQWtCO0lBQ2xCLFVBQVU7SUFDVixrQkFBa0I7RUFDcEI7RUFDQTtJQUNFLHlCQUF5QjtJQUN6QixrQkFBa0I7SUFDbEIsVUFBVTtJQUNWLGtCQUFrQjtFQUNwQjtFQUNBO0lBQ0UscUJBQXFCO0lBQ3JCLGtCQUFrQjtJQUNsQixRQUFRO0lBQ1IsVUFBVTtFQUNaO0VBQ0E7SUFDRSxZQUFZO0VBQ2Q7RUFJQTtFQUNBLGFBQWE7RUFDYixXQUFXO0VBQ1g7RUFHQTtFQUNBLGFBQWE7RUFDYixzQkFBc0I7RUFDdEIsc0JBQXNCO0VBQ3RCLDhCQUE4QjtFQUM5QjtFQUVBO0VBQ0EsWUFBWTtFQUNaO0VBRUE7RUFDQSxhQUFhO0VBQ2I7RUFFQTtJQUNFLFdBQVc7SUFDWDtFQUVGO0dBQ0MsWUFBWTtFQUNiO0VBQ0E7RUFDQSxhQUFhO0VBQ2IsZUFBZTtFQUNmIiwiZmlsZSI6InNyYy9hcHAvdmlld3MvZnJvbnQvdXNlci91c2VyLmNvbXBvbmVudC5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyIub2wtcG9wdXAge1xyXG4gICAgcG9zaXRpb246IGFic29sdXRlO1xyXG4gICAgYmFja2dyb3VuZC1jb2xvcjogd2hpdGU7XHJcbiAgICAtd2Via2l0LWZpbHRlcjogZHJvcC1zaGFkb3coMCAxcHggNHB4IHJnYmEoMCwwLDAsMC4yKSk7XHJcbiAgICBmaWx0ZXI6IGRyb3Atc2hhZG93KDAgMXB4IDRweCByZ2JhKDAsMCwwLDAuMikpO1xyXG4gICAgcGFkZGluZzogMTVweDtcclxuICAgIGJvcmRlci1yYWRpdXM6IDEwcHg7XHJcbiAgICBib3JkZXI6IDFweCBzb2xpZCAjY2NjY2NjO1xyXG4gICAgYm90dG9tOiAxMnB4O1xyXG4gICAgbGVmdDogLTUwcHg7XHJcbiAgICBtaW4td2lkdGg6IDI4MHB4O1xyXG4gIH1cclxuICAub2wtcG9wdXA6YWZ0ZXIsIC5vbC1wb3B1cDpiZWZvcmUge1xyXG4gICAgdG9wOiAxMDAlO1xyXG4gICAgYm9yZGVyOiBzb2xpZCB0cmFuc3BhcmVudDtcclxuICAgIGNvbnRlbnQ6IFwiIFwiO1xyXG4gICAgaGVpZ2h0OiAwO1xyXG4gICAgd2lkdGg6IDA7XHJcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XHJcbiAgICBwb2ludGVyLWV2ZW50czogbm9uZTtcclxuICB9XHJcbiAgLm9sLXBvcHVwOmFmdGVyIHtcclxuICAgIGJvcmRlci10b3AtY29sb3I6IHdoaXRlO1xyXG4gICAgYm9yZGVyLXdpZHRoOiAxMHB4O1xyXG4gICAgbGVmdDogNDhweDtcclxuICAgIG1hcmdpbi1sZWZ0OiAtMTBweDtcclxuICB9XHJcbiAgLm9sLXBvcHVwOmJlZm9yZSB7XHJcbiAgICBib3JkZXItdG9wLWNvbG9yOiAjY2NjY2NjO1xyXG4gICAgYm9yZGVyLXdpZHRoOiAxMXB4O1xyXG4gICAgbGVmdDogNDhweDtcclxuICAgIG1hcmdpbi1sZWZ0OiAtMTFweDtcclxuICB9XHJcbiAgLm9sLXBvcHVwLWNsb3NlciB7XHJcbiAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XHJcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XHJcbiAgICB0b3A6IDJweDtcclxuICAgIHJpZ2h0OiA4cHg7XHJcbiAgfVxyXG4gIC5vbC1wb3B1cC1jbG9zZXI6YWZ0ZXIge1xyXG4gICAgY29udGVudDogXCLinJZcIjtcclxuICB9XHJcbiAgXHJcbiAgXHJcbiAgXHJcbiAgLm1hcCB7XHJcbiAgaGVpZ2h0OiAxMDB2aDtcclxuICB3aWR0aDogMTAwJTtcclxuICB9XHJcbiAgXHJcbiAgXHJcbiAgLndyYXBwZXIge1xyXG4gIGRpc3BsYXk6IGZsZXg7XHJcbiAgZmxleC1kaXJlY3Rpb246IGNvbHVtbjtcclxuICBmbGV4LWZsb3c6IGNvbHVtbiB3cmFwO1xyXG4gIGp1c3RpZnktY29udGVudDogc3BhY2UtYmV0d2VlbjtcclxuICB9XHJcbiAgXHJcbiAgLmNvbnRlbnQtYXJlYSB7XHJcbiAgaGVpZ2h0OiAxMDAlO1xyXG4gIH1cclxuICBcclxuICAuZGVtby1hcmVhIHtcclxuICBoZWlnaHQ6IDEwMHZoO1xyXG4gIH1cclxuXHJcbiAgLmRlbW8tYXJlYTEge1xyXG4gICAgaGVpZ2h0OiAwcHg7XHJcbiAgICB9XHJcblxyXG4gIC52aWRlby1hcmVhIHtcclxuICAgaGVpZ2h0OiAxMDAlO1xyXG4gIH1cclxuICBpZnJhbWUge1xyXG4gIGhlaWdodDogMTAwdmg7XHJcbiAgb3ZlcmZsb3c6aGlkZGVuO1xyXG4gIH0iXX0= */"];
    /***/
  },

  /***/
  "./src/app/views/front/user/user.component.ngfactory.js":
  /*!**************************************************************!*\
    !*** ./src/app/views/front/user/user.component.ngfactory.js ***!
    \**************************************************************/

  /*! exports provided: RenderType_UserComponent, View_UserComponent_0, View_UserComponent_Host_0, UserComponentNgFactory */

  /***/
  function srcAppViewsFrontUserUserComponentNgfactoryJs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "RenderType_UserComponent", function () {
      return RenderType_UserComponent;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserComponent_0", function () {
      return View_UserComponent_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "View_UserComponent_Host_0", function () {
      return View_UserComponent_Host_0;
    });
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserComponentNgFactory", function () {
      return UserComponentNgFactory;
    });
    /* harmony import */


    var _user_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! ./user.component.css.shim.ngstyle */
    "./src/app/views/front/user/user.component.css.shim.ngstyle.js");
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! @angular/common */
    "./node_modules/@angular/common/fesm2015/common.js");
    /* harmony import */


    var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! @angular/forms */
    "./node_modules/@angular/forms/fesm2015/forms.js");
    /* harmony import */


    var _user_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! ./user.component */
    "./src/app/views/front/user/user.component.ts");
    /* harmony import */


    var _services_user_service__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! ../../../services/user.service */
    "./src/app/services/user.service.ts");
    /* harmony import */


    var _angular_router__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! @angular/router */
    "./node_modules/@angular/router/fesm2015/router.js");
    /* harmony import */


    var _services_notification_service___WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
    /*! ../../../services/notification.service  */
    "./src/app/services/notification.service .ts");
    /**
     * @fileoverview This file was generated by the Angular template compiler. Do not edit.
     *
     * @suppress {suspiciousCode,uselessCode,missingProperties,missingOverride,checkTypes,extraRequire}
     * tslint:disable
     */


    var styles_UserComponent = [_user_component_css_shim_ngstyle__WEBPACK_IMPORTED_MODULE_0__["styles"]];

    var RenderType_UserComponent = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵcrt"]({
      encapsulation: 0,
      styles: styles_UserComponent,
      data: {}
    });

    function View_UserComponent_1(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 34, "div", [["class", "row col-md-7"], ["style", "  \n      background-image: linear-gradient(rgb(255 255 255 / 50%), rgb(255 255 255 / 50%)), url(https://telefret.com/assets/img/logo.png);\n    background-repeat: no-repeat;\n    background-position: center;\n  background-color: white;\n  filter: drop-shadow(0 1px 4px rgba(0,0,0,0.2));\n  margin: 25px;\n  border-radius: 10px;\n  text-align: start;\n  border: 1px solid #cccccc;\n  bottom: 12px;\n  min-width: 280px;margin-left: auto!important;margin-right: auto!important; "]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](1, 0, null, null, 12, "div", [["class", "col-md-6"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](2, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](3, null, [" Exp\xE9diteur : ", ""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](4, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](5, null, [" Type de marchandise: ", " "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](6, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](7, null, [" Tonnage: ", " "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](8, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](9, null, [" D\xE9tails sur la marchandise: ", " "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](10, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](11, null, ["Adresse de chargement : ", ""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](12, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](13, null, ["Date de chargement: ", ""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](14, 0, null, null, 14, "div", [["class", "col-md-6"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](15, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](16, null, [" Transporteur: ", " "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](17, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](18, null, [" Matricule du v\xE9hicule: ", " "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](19, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](20, null, [" Marque: ", " "])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](21, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](22, null, [" Nom du Chauffeur: ", ""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](23, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](24, null, ["Contact du Chauffeur : ", ""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](25, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](26, null, ["Adresse de livraison : ", ""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](27, 0, null, null, 1, "p", [["style", "color: black!important"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](28, null, ["Date de livraison: ", ""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](29, 0, null, null, 2, "div", [["class", "col-md-6"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](30, 0, null, null, 1, "a", [["style", "margin-left: auto!important;margin-right: auto!important;"]], [[8, "href", 4]], null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, [""])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](32, 0, null, null, 2, "div", [["class", "col-md-6"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](33, 0, null, null, 1, "a", [["style", "margin-left: auto!important;margin-right: auto!important;"]], [[8, "href", 4]], null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Consulter les fiches de transport"]))], null, function (_ck, _v) {
        var _co = _v.component;
        var currVal_0 = (_co.details == null ? null : _co.details.Chargeur == null ? null : _co.details.Chargeur.r_s) != "" && (_co.details == null ? null : _co.details.Chargeur == null ? null : _co.details.Chargeur.r_s) != " " ? _co.details == null ? null : _co.details.Chargeur == null ? null : _co.details.Chargeur.r_s : (_co.details == null ? null : _co.details.Chargeur == null ? null : _co.details.Chargeur.nom) + " " + (_co.details == null ? null : _co.details.Chargeur == null ? null : _co.details.Chargeur.prenom);

        _ck(_v, 3, 0, currVal_0);

        var currVal_1 = (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.marchandise) ? _co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.marchandise : "";

        _ck(_v, 5, 0, currVal_1);

        var currVal_2 = (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.poid) ? _co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.poid : "";

        _ck(_v, 7, 0, currVal_2);

        var currVal_3 = (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.details_march) ? _co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.details_march : "";

        _ck(_v, 9, 0, currVal_3);

        var currVal_4 = (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.adresse_charg) + " " + (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.ville_charg) + " " + (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.pays_charg);

        _ck(_v, 11, 0, currVal_4);

        var currVal_5 = _co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.date_charg;

        _ck(_v, 13, 0, currVal_5);

        var currVal_6 = (_co.details == null ? null : _co.details.Transporteur == null ? null : _co.details.Transporteur.r_s) != "" && (_co.details == null ? null : _co.details.Transporteur == null ? null : _co.details.Transporteur.r_s) != " " ? _co.details == null ? null : _co.details.Transporteur == null ? null : _co.details.Transporteur.r_s : (_co.details == null ? null : _co.details.Transporteur == null ? null : _co.details.Transporteur.nom) + " " + (_co.details == null ? null : _co.details.Transporteur == null ? null : _co.details.Transporteur.prenom);

        _ck(_v, 16, 0, currVal_6);

        var currVal_7 = _co.details == null ? null : _co.details.Abonnement == null ? null : _co.details.Abonnement.matricule;

        _ck(_v, 18, 0, currVal_7);

        var currVal_8 = _co.details == null ? null : _co.details.Abonnement == null ? null : _co.details.Abonnement.marque;

        _ck(_v, 20, 0, currVal_8);

        var currVal_9 = (_co.details == null ? null : _co.details.Abonnement == null ? null : _co.details.Abonnement.nom_chauffeur) != "" ? _co.details == null ? null : _co.details.Abonnement == null ? null : _co.details.Abonnement.nom_chauffeur : "/";

        _ck(_v, 22, 0, currVal_9);

        var currVal_10 = (_co.details == null ? null : _co.details.Abonnement == null ? null : _co.details.Abonnement.telephone_chauffeur) != "" ? _co.details == null ? null : _co.details.Abonnement == null ? null : _co.details.Abonnement.telephone_chauffeur : _co.details == null ? null : _co.details.Abonnement == null ? null : _co.details.Abonnement.telephone;

        _ck(_v, 24, 0, currVal_10);

        var currVal_11 = (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.adresse_liv) + " " + (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.ville_liv) + " " + (_co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.pays_liv);

        _ck(_v, 26, 0, currVal_11);

        var currVal_12 = _co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.date_liv;

        _ck(_v, 28, 0, currVal_12);

        var currVal_13 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵinlineInterpolate"](1, "https://telefret.com/invoice2.php?id_charg=", _co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.id_charg, "");

        _ck(_v, 30, 0, currVal_13);

        var currVal_14 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵinlineInterpolate"](1, "https://telefret.com/invoice1.php?id_charg=", _co.details == null ? null : _co.details.Chargement == null ? null : _co.details.Chargement.id_charg, "");

        _ck(_v, 33, 0, currVal_14);
      });
    }

    function View_UserComponent_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 0, "link", [["href", "//cdnjs.cloudflare.com/ajax/libs/ol3/3.5.0/ol.min.css"], ["rel", "stylesheet"], ["type", "text/css"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](1, 0, null, null, 19, "div", [["class", "bradcam_area bradcam_bg_1"], ["style", "text-align: -webkit-center;padding: 20px;"]], [[4, "padding", null]], null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵand"](16777216, null, null, 1, null, View_UserComponent_1)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](3, 16384, null, 0, _angular_common__WEBPACK_IMPORTED_MODULE_2__["NgIf"], [_angular_core__WEBPACK_IMPORTED_MODULE_1__["ViewContainerRef"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["TemplateRef"]], {
        ngIf: [0, "ngIf"]
      }, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](4, 0, null, null, 16, "div", [["class", "row"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](5, 0, null, null, 15, "div", [["class", "col-xl-12"], ["style", "text-align: -webkit-center;margin-left: auto!important;margin-right: auto!important;"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](6, 0, null, null, 14, "div", [["class", "text-align-center"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](7, 0, null, null, 3, "div", [["class", "input-group col-md-3"], ["style", "margin-left: auto!important;margin-right: auto!important;"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](8, 0, null, null, 2, "div", [["class", "col-md-12"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](9, 0, null, null, 1, "h5", [["for", ""], ["style", "color: white;"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵted"](-1, null, ["Saisissez le N\xB0 d'exp\xE9dition"])), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](11, 0, null, null, 9, "div", [["class", "input-group col-md-3"], ["style", "margin-left: auto!important;margin-right: auto!important;"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](12, 0, null, null, 8, "div", [["class", "col-md-12"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](13, 0, null, null, 1, "button", [["class", "btn btn-success"], ["style", "\n            position:absolute; right: 10px\n            "], ["type", "button"]], null, [[null, "click"]], function (_v, en, $event) {
        var ad = true;
        var _co = _v.component;

        if ("click" === en) {
          _co.onChange(_co.value, true);

          var pd_0 = _co.onChange(_co.value, false) !== false;
          ad = pd_0 && ad;
        }

        return ad;
      }, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](14, 0, null, null, 0, "i", [["class", "fa fa-search my-float"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](15, 0, null, null, 5, "input", [["class", "form-control"], ["id", "form1"], ["type", "search"]], [[2, "ng-untouched", null], [2, "ng-touched", null], [2, "ng-pristine", null], [2, "ng-dirty", null], [2, "ng-valid", null], [2, "ng-invalid", null], [2, "ng-pending", null]], [[null, "ngModelChange"], [null, "input"], [null, "blur"], [null, "compositionstart"], [null, "compositionend"]], function (_v, en, $event) {
        var ad = true;
        var _co = _v.component;

        if ("input" === en) {
          var pd_0 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 16)._handleInput($event.target.value) !== false;
          ad = pd_0 && ad;
        }

        if ("blur" === en) {
          var pd_1 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 16).onTouched() !== false;
          ad = pd_1 && ad;
        }

        if ("compositionstart" === en) {
          var pd_2 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 16)._compositionStart() !== false;
          ad = pd_2 && ad;
        }

        if ("compositionend" === en) {
          var pd_3 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 16)._compositionEnd($event.target.value) !== false;
          ad = pd_3 && ad;
        }

        if ("ngModelChange" === en) {
          var pd_4 = _co.onChangeValue($event) !== false;
          ad = pd_4 && ad;
        }

        return ad;
      }, null, null)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](16, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["DefaultValueAccessor"], [_angular_core__WEBPACK_IMPORTED_MODULE_1__["Renderer2"], _angular_core__WEBPACK_IMPORTED_MODULE_1__["ElementRef"], [2, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["COMPOSITION_BUFFER_MODE"]]], null, null), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](1024, null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["NG_VALUE_ACCESSOR"], function (p0_0) {
        return [p0_0];
      }, [_angular_forms__WEBPACK_IMPORTED_MODULE_3__["DefaultValueAccessor"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](18, 671744, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["NgModel"], [[8, null], [8, null], [8, null], [6, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["NG_VALUE_ACCESSOR"]]], {
        model: [0, "model"]
      }, {
        update: "ngModelChange"
      }), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵprd"](2048, null, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["NgControl"], null, [_angular_forms__WEBPACK_IMPORTED_MODULE_3__["NgModel"]]), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](20, 16384, null, 0, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["NgControlStatus"], [[4, _angular_forms__WEBPACK_IMPORTED_MODULE_3__["NgControl"]]], null, null), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](21, 0, null, null, 1, "div", [["class", "wrapper "]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](22, 0, null, null, 0, "div", [["id", "map"]], [[8, "className", 0]], null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](23, 0, null, null, 2, "div", [["class", "ol-popup"], ["id", "popup"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](24, 0, null, null, 0, "a", [["class", "ol-popup-closer"], ["href", "#"], ["id", "popup-closer"]], null, null, null, null, null)), (_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](25, 0, null, null, 0, "div", [["id", "popup-content"]], null, null, null, null, null))], function (_ck, _v) {
        var _co = _v.component;
        var currVal_1 = _co.details;

        _ck(_v, 3, 0, currVal_1);

        var currVal_9 = _co.value;

        _ck(_v, 18, 0, currVal_9);
      }, function (_ck, _v) {
        var _co = _v.component;
        var currVal_0 = !_co.details ? " 182px 0 102px" : "20px";

        _ck(_v, 1, 0, currVal_0);

        var currVal_2 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassUntouched;

        var currVal_3 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassTouched;

        var currVal_4 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassPristine;

        var currVal_5 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassDirty;

        var currVal_6 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassValid;

        var currVal_7 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassInvalid;

        var currVal_8 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵnov"](_v, 20).ngClassPending;

        _ck(_v, 15, 0, currVal_2, currVal_3, currVal_4, currVal_5, currVal_6, currVal_7, currVal_8);

        var currVal_10 = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵinlineInterpolate"](1, "", !_co.valueFind ? "demo-area1" : "demo-area", " map");

        _ck(_v, 22, 0, currVal_10);
      });
    }

    function View_UserComponent_Host_0(_l) {
      return _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵvid"](0, [(_l()(), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵeld"](0, 0, null, null, 1, "app-user", [], null, null, null, View_UserComponent_0, RenderType_UserComponent)), _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵdid"](1, 114688, null, 0, _user_component__WEBPACK_IMPORTED_MODULE_4__["UserComponent"], [_services_user_service__WEBPACK_IMPORTED_MODULE_5__["UserService"], _angular_router__WEBPACK_IMPORTED_MODULE_6__["ActivatedRoute"], _services_notification_service___WEBPACK_IMPORTED_MODULE_7__["NotificationService"]], null, null)], function (_ck, _v) {
        _ck(_v, 1, 0);
      }, null);
    }

    var UserComponentNgFactory = _angular_core__WEBPACK_IMPORTED_MODULE_1__["ɵccf"]("app-user", _user_component__WEBPACK_IMPORTED_MODULE_4__["UserComponent"], View_UserComponent_Host_0, {}, {}, []);
    /***/

  },

  /***/
  "./src/app/views/front/user/user.component.ts":
  /*!****************************************************!*\
    !*** ./src/app/views/front/user/user.component.ts ***!
    \****************************************************/

  /*! exports provided: UserComponent */

  /***/
  function srcAppViewsFrontUserUserComponentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "UserComponent", function () {
      return UserComponent;
    });
    /* harmony import */


    var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! tslib */
    "./node_modules/tslib/tslib.es6.js");
    /* harmony import */


    var ol_Map__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! ol/Map */
    "./node_modules/ol/Map.js");
    /* harmony import */


    var ol_View__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ol/View */
    "./node_modules/ol/View.js");
    /* harmony import */


    var ol_Feature__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! ol/Feature */
    "./node_modules/ol/Feature.js");
    /* harmony import */


    var ol_geom_Point__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(
    /*! ol/geom/Point */
    "./node_modules/ol/geom/Point.js");
    /* harmony import */


    var ol_proj_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(
    /*! ol/proj.js */
    "./node_modules/ol/proj.js");
    /* harmony import */


    var ol_layer__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(
    /*! ol/layer */
    "./node_modules/ol/layer.js");
    /* harmony import */


    var ol_source_Vector__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(
    /*! ol/source/Vector */
    "./node_modules/ol/source/Vector.js");
    /* harmony import */


    var ol_style__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(
    /*! ol/style */
    "./node_modules/ol/style.js");
    /* harmony import */


    var ol_source_OSM__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(
    /*! ol/source/OSM */
    "./node_modules/ol/source/OSM.js");
    /* harmony import */


    var ol_Overlay__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(
    /*! ol/Overlay */
    "./node_modules/ol/Overlay.js");
    /* harmony import */


    var ol_coordinate__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(
    /*! ol/coordinate */
    "./node_modules/ol/coordinate.js");

    var UserComponent = /*#__PURE__*/function () {
      function UserComponent(userService, route, notifyService) {
        _classCallCheck(this, UserComponent);

        this.userService = userService;
        this.route = route;
        this.notifyService = notifyService;
        this.youtubeUrl = 'https://www.youtube.com/watch?v=WQFjZymnF3M';
        this.youtubeVideoId = 'WQFjZymnF3M';
        this.value = "";
        this.searchId = null;
        this.details = null;
        this.valueFind = false;

        if (this.route.snapshot.params.id) {
          this.searchId = this.route.snapshot.params.id;
          this.value = this.searchId;
        } else console.log("ok");
      }

      _createClass(UserComponent, [{
        key: "ngOnInit",
        value: function ngOnInit() {
          var _this2 = this;

          var tag = document.createElement('script');
          var container = document.getElementById('popup');
          container.hidden = true; // this.userService.getUserMapMarks().subscribe(
          //   async value => {
          //     console.log(value);
          //     this.initilizeMap(value,null);
          //     // if(this.route.snapshot.params.id)
          //     // {
          //     //   this.onChange(this.route.snapshot.params.id,true);this.onChange(this.route.snapshot.params.id,false);
          //     // }
          //   },
          //   error1 => {
          //     console.log(error1);
          //   }
          // ); 

          this.userService.getUserByEmailPassword("telefret", "Telefret@2020").subscribe(function (value) {
            console.log(value); // this.ngxService.stop();
            // alert("ok")

            if (value.hasOwnProperty('id')) {
              _this2.notifyService.showSuccess("Bienvenue!", "TELEFRET");

              _this2.userService.addItem(JSON.stringify(value));

              _this2.userService.user = value;
              _this2.userService.isAuth = true; // alert(this.route.snapshot.params.id)

              if (_this2.route.snapshot.params.id) {
                _this2.onChange(_this2.route.snapshot.params.id, true);

                _this2.onChange(_this2.route.snapshot.params.id, false);
              }
            } else {
              _this2.notifyService.showError("Email ou mot de passe incorrect!", "TELEFRET");

              return;
            }
          }, function (error) {
            _this2.notifyService.showError("Email ou mot de passe incorrect!", "TELEFRET");
          });
        }
      }, {
        key: "initilizeMap",
        value: function initilizeMap(ListMarker, filter, direction) {
          var _this3 = this;

          var container = document.getElementById('popup');
          var content = document.getElementById('popup-content');
          var closer = document.getElementById('popup-closer');
          container.hidden = false;
          console.log("container", container);
          console.log("content", content);
          console.log("closer", closer);
          var arrayMarker = [];
          var divmap = document.getElementById('map');
          ListMarker.map(function (element) {
            if (filter && filter != '' && element.idRealTimeRecord) {
              divmap.innerHTML = '<label>Loading..</label>';
              _this3.valueFind = true;
              console.log("filterrrrr", (element.idRealTimeRecord + "").includes(filter));
              console.log("*******************************************", [element.coordinate.lng, element.coordinate.lat]);
              var feature = new ol_Feature__WEBPACK_IMPORTED_MODULE_3__["default"]({
                type: 'click',
                geometry: new ol_geom_Point__WEBPACK_IMPORTED_MODULE_4__["default"](Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["fromLonLat"])([element.coordinate.lng, element.coordinate.lat]))
              });
              feature.setStyle(new ol_style__WEBPACK_IMPORTED_MODULE_8__["Style"]({
                image: new ol_style__WEBPACK_IMPORTED_MODULE_8__["Icon"]({
                  scale: 0.7,
                  rotateWithView: false,
                  anchor: [0.5, 1],
                  opacity: 1,
                  src: '../../../../../assets/markeurnew_64x64.png'
                })
              }));
              feature.addEventListener('click', function (event) {
                console.log(event);
                return true;
              });

              if (direction && direction.from && direction.to) {
                // var routeLayer = new Vector({
                //    style: new Style({
                //      stroke:new Stroke({ color: "hsl(205, 100%, 50%)", width: 4 })
                //    })
                //  });
                console.log("*******************************************", [parseFloat(direction.from.lat), parseFloat(direction.from.lat)]);
                console.log("*******************************************", [parseFloat(direction.from.lon), parseFloat(direction.from.lon)]);
                var feature1 = new ol_Feature__WEBPACK_IMPORTED_MODULE_3__["default"]({
                  type: 'click',
                  geometry: new ol_geom_Point__WEBPACK_IMPORTED_MODULE_4__["default"](Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["fromLonLat"])([parseFloat(direction.from.lon), parseFloat(direction.from.lat)]))
                });
                feature1.setStyle(new ol_style__WEBPACK_IMPORTED_MODULE_8__["Style"]({
                  image: new ol_style__WEBPACK_IMPORTED_MODULE_8__["Icon"]({
                    scale: 0.7,
                    rotateWithView: false,
                    anchor: [0.5, 1],
                    opacity: 1,
                    src: '../../../../../assets/dotgreen1.png'
                  })
                }));
                feature1.addEventListener('click', function (event) {
                  console.log(event);
                  return true;
                });
                arrayMarker.push(feature1);
                var feature2 = new ol_Feature__WEBPACK_IMPORTED_MODULE_3__["default"]({
                  type: 'click',
                  geometry: new ol_geom_Point__WEBPACK_IMPORTED_MODULE_4__["default"](Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["fromLonLat"])([parseFloat(direction.to.lon), parseFloat(direction.to.lat)]))
                });
                feature2.setStyle(new ol_style__WEBPACK_IMPORTED_MODULE_8__["Style"]({
                  image: new ol_style__WEBPACK_IMPORTED_MODULE_8__["Icon"]({
                    scale: 0.7,
                    rotateWithView: false,
                    anchor: [0.5, 1],
                    opacity: 1,
                    src: '../../../../../assets/dotred1.png'
                  })
                }));
                feature2.addEventListener('click', function (event) {
                  console.log(event);
                  return true;
                });
                arrayMarker.push(feature2);
              }

              arrayMarker.push(feature);
            } else if (filter == null || filter == '') {
              if (direction && direction.from && direction.to) {
                // var routeLayer = new Vector({
                //    style: new Style({
                //      stroke:new Stroke({ color: "hsl(205, 100%, 50%)", width: 4 })
                //    })
                //  });
                var feature1 = new ol_Feature__WEBPACK_IMPORTED_MODULE_3__["default"]({
                  type: 'click',
                  geometry: new ol_geom_Point__WEBPACK_IMPORTED_MODULE_4__["default"](Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["fromLonLat"])([direction.from.lng, direction.from.lat]))
                });
                feature1.setStyle(new ol_style__WEBPACK_IMPORTED_MODULE_8__["Style"]({
                  image: new ol_style__WEBPACK_IMPORTED_MODULE_8__["Icon"]({
                    scale: 0.7,
                    rotateWithView: false,
                    anchor: [0.5, 1],
                    opacity: 1,
                    src: '../../../../../assets/dotgreen.png'
                  })
                }));
                feature1.addEventListener('click', function (event) {
                  console.log(event);
                  return true;
                });
                arrayMarker.push(feature1);
                var feature2 = new ol_Feature__WEBPACK_IMPORTED_MODULE_3__["default"]({
                  type: 'click',
                  geometry: new ol_geom_Point__WEBPACK_IMPORTED_MODULE_4__["default"](Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["fromLonLat"])([direction.to.lng, direction.to.lat]))
                });
                feature2.setStyle(new ol_style__WEBPACK_IMPORTED_MODULE_8__["Style"]({
                  image: new ol_style__WEBPACK_IMPORTED_MODULE_8__["Icon"]({
                    scale: 0.7,
                    rotateWithView: false,
                    anchor: [0.5, 1],
                    opacity: 1,
                    src: '../../../../../assets/dotred.png'
                  })
                }));
                feature2.addEventListener('click', function (event) {
                  console.log(event);
                  return true;
                });
                arrayMarker.push(feature2);
              }

              arrayMarker.push(feature);
            }
          }); // this.chicago = new Feature({
          //   geometry: new Point(fromLonLat([	-87.623177, 41.881832]))
          // });
          // this.chicago.setStyle(new Style({
          //   image: new Icon(({
          //     color: '#8959A8',
          //     crossOrigin: 'anonymous',
          //     src: 'assets/vectorpoint.svg',
          //     imgSize: [20, 20]
          //   }))
          // }));
          // arrayMarker.push(this.chicago)
          // this.london = new Feature({
          //   geometry: new Point(fromLonLat([-0.12755, 51.507222]))
          // });
          // this.madrid = new Feature({
          //   geometry: new Point(fromLonLat([-3.683333, 40.4]))
          // });
          // this.london.setStyle(new Style({
          //   image: new Icon(({
          //     color: '#4271AE',
          //     crossOrigin: 'anonymous',
          //     src: 'assets/vectorpoint.svg',
          //     imgSize: [20, 20]
          //   }))
          // }));
          // this.madrid.setStyle(new Style({
          //   image: new Icon(({
          //     color: [113, 140, 0],
          //     crossOrigin: 'anonymous',
          //     src: 'assets/dot.png',
          //     imgSize: [20, 20]
          //   }))
          // }));

          this.vectorSource = new ol_source_Vector__WEBPACK_IMPORTED_MODULE_7__["default"]({
            features: arrayMarker
          });
          this.vectorLayer = new ol_layer__WEBPACK_IMPORTED_MODULE_6__["Vector"]({
            source: this.vectorSource
          });
          var overlay = new ol_Overlay__WEBPACK_IMPORTED_MODULE_10__["default"]({
            element: container,
            autoPan: true,
            autoPanAnimation: {
              duration: 250
            }
          });
          divmap.innerHTML = null;
          this.map = new ol_Map__WEBPACK_IMPORTED_MODULE_1__["default"]({
            target: 'map',
            layers: [new ol_layer__WEBPACK_IMPORTED_MODULE_6__["Tile"]({
              source: new ol_source_OSM__WEBPACK_IMPORTED_MODULE_9__["default"]()
            }), this.vectorLayer],
            overlays: [overlay],
            view: new ol_View__WEBPACK_IMPORTED_MODULE_2__["default"]({
              center: Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["fromLonLat"])([ListMarker[0].coordinate.lng, ListMarker[0].coordinate.lat]),
              zoom: 7
            })
          });
          var that = this;
          this.map.on('click', function (evt) {
            var f = that.map.forEachFeatureAtPixel(evt.pixel, function (ft, layer) {
              return ft;
            });

            if (f && f.get('type') == 'click') {
              var geometry = f.getGeometry();
              var coord = geometry.getCoordinates();
              var coordinate = coord;
              var hdms = Object(ol_coordinate__WEBPACK_IMPORTED_MODULE_11__["toStringHDMS"])(Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["toLonLat"])(coordinate));
              var value = that.userService.ListMarker.find(function (x) {
                return (x.coordinate.lng + "").substr(0, 5) == (Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["toLonLat"])(coordinate)[0] + "").substr(0, 5) && (x.coordinate.lat + "").substr(0, 5) == (Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["toLonLat"])(coordinate)[1] + "").substr(0, 5);
              });
              console.log("***********************************1111", value);

              if (value) {
                var city;
                var speed = value.speed;
                var date = new Date(value.recordTime);
                var dateStr = ("00" + (date.getMonth() + 1)).slice(-2) + "/" + ("00" + date.getDate()).slice(-2) + "/" + date.getFullYear() + " " + ("00" + date.getHours()).slice(-2) + ":" + ("00" + date.getMinutes()).slice(-2) + ":" + ("00" + date.getSeconds()).slice(-2);
                fetch('https://telefret.com/api_redirect/?lon=' + Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["toLonLat"])(coordinate)[0] + '&lat=' + Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["toLonLat"])(coordinate)[1]).then(function (response) {
                  return response.json();
                }).then(function (json) {
                  city = json.display_name;
                  console.log("valuevaluevaluevaluevaluevaluevaluevalue", value);
                  content.innerHTML = "\n                \n            <p> <b> Adresse:</b> ".concat(city, "\n          \n              </p>\n              <p> <b> Date:</b> ").concat(value.recordTime ? dateStr : "Inconnu", "\n          \n              </p>\n              <p>\n              <b>  Vitesse: </b> ").concat(speed, "\n                </p>");
                  overlay.setPosition(coordinate);
                });
              } else {
                var date = new Date();
                var dateStr = ("00" + (date.getMonth() + 1)).slice(-2) + "/" + ("00" + date.getDate()).slice(-2) + "/" + date.getFullYear() + " " + ("00" + date.getHours()).slice(-2) + ":" + ("00" + date.getMinutes()).slice(-2) + ":" + ("00" + date.getSeconds()).slice(-2);
                fetch('https://telefret.com/api_redirect/?lon=' + Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["toLonLat"])(coordinate)[0] + '&lat=' + Object(ol_proj_js__WEBPACK_IMPORTED_MODULE_5__["toLonLat"])(coordinate)[1]).then(function (response) {
                  return response.json();
                }).then(function (json) {
                  city = json.display_name;
                  content.innerHTML = "\n                \n            <p><b> Adresse:</b> ".concat(city, "\n          \n              </p>\n              <p> <b>Date:</b> ").concat(dateStr, "\n          \n              </p>\n              ");
                  overlay.setPosition(coordinate);
                });
              }
            } else {
              closer.click();
            }
          });
          this.map.on('pointermove', function (e) {
            if (e.dragging) {
              return;
            }

            var pixel = that.map.getEventPixel(e.originalEvent);
            var hit = that.map.hasFeatureAtPixel(pixel);
            console.log(that.map.getTarget()); // that.map. .cursor = hit ? 'pointer' : '';
          }); // this.map.on('singleclick', function (evt: any) {
          //   const coordinate = evt.coordinate;
          //   const hdms = toStringHDMS(toLonLat(coordinate));
          //   content.innerHTML = '<p>Current coordinates are :</p><code>' + hdms +
          //     '</code>';
          //   overlay.setPosition(coordinate);
          // });
          //   const map1= this.map;
          //   map1.on('singleclick', function(e) {
          //     var feature = map1.forEachFeatureAtPixel(e.pixel, function(feature) {
          //     return feature;
          //     });
          //     if(feature && feature. n.marker) {
          //         feature.n.marker.label.message = "CLICKED!"; // Do something smarter here ...
          //     }
          // });

          closer.onclick = function () {
            overlay.setPosition(undefined);
            closer.blur();
            return false;
          };
        }
      }, {
        key: "onChange",
        value: function onChange(val, toast) {
          var _this4 = this;

          console.log(val);
          var direction = {
            from: null,
            to: null
          };

          if (val != "") {
            this.userService.getUserMapMarks(val).subscribe(function (value) {
              return Object(tslib__WEBPACK_IMPORTED_MODULE_0__["__awaiter"])(_this4, void 0, void 0, /*#__PURE__*/regeneratorRuntime.mark(function _callee2() {
                var that;
                return regeneratorRuntime.wrap(function _callee2$(_context2) {
                  while (1) {
                    switch (_context2.prev = _context2.next) {
                      case 0:
                        console.log(value);
                        this.details = value ? value : null;

                        if (this.details) {
                          that = this;
                          fetch('https://nominatim.openstreetmap.org/search?q=' + that.details.Chargement.adresse_charg + '+' + that.details.Chargement.ville_charg + '+' + that.details.Chargement.pays_charg + '&format=json&polygon=1&addressdetails=1').then(function (response) {
                            return response.json();
                          }).then(function (json) {
                            console.log(json);

                            if (json && json.length > 0) {
                              direction.from = json[0];
                              fetch('https://nominatim.openstreetmap.org/search?q=' + that.details.Chargement.adresse_liv + '+' + that.details.Chargement.ville_liv + '+' + that.details.Chargement.pays_liv + '&format=json&polygon=1&addressdetails=1').then(function (response) {
                                return response.json();
                              }).then(function (json) {
                                console.log(json);

                                if (json && json.length > 0) {
                                  direction.to = json[0];
                                  var array = [];
                                  array.push(value);
                                  that.userService.ListMarker = array;
                                  that.initilizeMap(array, val, direction);
                                } //overlay.setPosition(coordinate);

                              });
                            } //overlay.setPosition(coordinate);

                          });
                        }

                      case 3:
                      case "end":
                        return _context2.stop();
                    }
                  }
                }, _callee2, this);
              }));
            }, function (error1) {
              if (toast) _this4.notifyService.showError(error1.error, "TELEFRET");
              console.log(error1);
            });
          } else if (toast) this.notifyService.showError("Veillez entrer une valeur!", "TELEFRET");
        }
      }, {
        key: "onChangeValue",
        value: function onChangeValue(val) {
          this.value = val;
        }
      }, {
        key: "reverseGeocode",
        value: function reverseGeocode(coords) {
          fetch('http://nominatim.openstreetmap.org/reverse?format=json&lon=' + coords[0] + '&lat=' + coords[1]).then(function (response) {
            return response.json();
          }).then(function (json) {
            console.log(json);
          });
        }
      }]);

      return UserComponent;
    }();
    /***/

  },

  /***/
  "./src/environments/environment.ts":
  /*!*****************************************!*\
    !*** ./src/environments/environment.ts ***!
    \*****************************************/

  /*! exports provided: environment */

  /***/
  function srcEnvironmentsEnvironmentTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony export (binding) */


    __webpack_require__.d(__webpack_exports__, "environment", function () {
      return environment;
    }); // This file can be replaced during build by using the `fileReplacements` array.
    // `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
    // The list of file replacements can be found in `angular.json`.


    var environment = {
      production: false
    };
    /*
     * For easier debugging in development mode, you can import the following file
     * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
     *
     * This import should be commented out in production mode because it will have a negative impact
     * on performance if an error is thrown.
     */
    // import 'zone.js/dist/zone-error';  // Included with Angular CLI.

    /***/
  },

  /***/
  "./src/main.ts":
  /*!*********************!*\
    !*** ./src/main.ts ***!
    \*********************/

  /*! no exports provided */

  /***/
  function srcMainTs(module, __webpack_exports__, __webpack_require__) {
    "use strict";

    __webpack_require__.r(__webpack_exports__);
    /* harmony import */


    var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(
    /*! @angular/core */
    "./node_modules/@angular/core/fesm2015/core.js");
    /* harmony import */


    var _environments_environment__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(
    /*! ./environments/environment */
    "./src/environments/environment.ts");
    /* harmony import */


    var _app_app_module_ngfactory__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(
    /*! ./app/app.module.ngfactory */
    "./src/app/app.module.ngfactory.js");
    /* harmony import */


    var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(
    /*! @angular/platform-browser */
    "./node_modules/@angular/platform-browser/fesm2015/platform-browser.js");

    if (_environments_environment__WEBPACK_IMPORTED_MODULE_1__["environment"].production) {
      Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["enableProdMode"])();
    }

    _angular_platform_browser__WEBPACK_IMPORTED_MODULE_3__["platformBrowser"]().bootstrapModuleFactory(_app_app_module_ngfactory__WEBPACK_IMPORTED_MODULE_2__["AppModuleNgFactory"])["catch"](function (err) {
      return console.error(err);
    });
    /***/

  },

  /***/
  0:
  /*!***************************!*\
    !*** multi ./src/main.ts ***!
    \***************************/

  /*! no static exports found */

  /***/
  function _(module, exports, __webpack_require__) {
    module.exports = __webpack_require__(
    /*! C:\Users\2N\Documents\Projets\TCHYCO\P2PEX\P2pExWeb\src\main.ts */
    "./src/main.ts");
    /***/
  }
}, [[0, "runtime", "vendor"]]]);
//# sourceMappingURL=main-es5.js.map
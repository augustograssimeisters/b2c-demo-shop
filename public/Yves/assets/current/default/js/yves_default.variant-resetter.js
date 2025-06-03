"use strict";
(globalThis["webpackJsonp_yves_default"] = globalThis["webpackJsonp_yves_default"] || []).push([["variant-resetter"],{

/***/ "./src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/variant-resetter/variant-resetter.ts":
/*!****************************************************************************************************************!*\
  !*** ./src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/variant-resetter/variant-resetter.ts ***!
  \****************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ VariantResetter)
/* harmony export */ });
/* harmony import */ var ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ShopUi/models/component */ "./vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/component.ts");

class VariantResetter extends ShopUi_models_component__WEBPACK_IMPORTED_MODULE_0__["default"] {
  constructor() {
    super(...arguments);
    this.trigger = void 0;
    this.target = void 0;
  }
  readyCallback() {}
  init() {
    this.trigger = this.getElementsByClassName(this.jsName + "__trigger")[0];
    this.target = this.getElementsByClassName(this.jsName + "__target")[0];
    this.mapEvents();
  }
  mapEvents() {
    this.trigger.addEventListener('click', event => this.onClick(event));
  }
  onClick(event) {
    if (this.isAjaxMode) {
      return;
    }
    event.preventDefault();
    this.target.value = '';
    this.target.closest('form').submit();
  }
  get isAjaxMode() {
    return !!this.getAttribute('ajax-mode');
  }
}

/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9qcy95dmVzX2RlZmF1bHQudmFyaWFudC1yZXNldHRlci5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7OztBQUFnRDtBQUVqQyxNQUFNQyxlQUFlLFNBQVNELCtEQUFTLENBQUM7RUFBQUUsWUFBQTtJQUFBLFNBQUFDLFNBQUE7SUFBQSxLQUN6Q0MsT0FBTztJQUFBLEtBQ1BDLE1BQU07RUFBQTtFQUVOQyxhQUFhQSxDQUFBLEVBQVMsQ0FBQztFQUV2QkMsSUFBSUEsQ0FBQSxFQUFTO0lBQ25CLElBQUksQ0FBQ0gsT0FBTyxHQUFnQixJQUFJLENBQUNJLHNCQUFzQixDQUFJLElBQUksQ0FBQ0MsTUFBTSxjQUFXLENBQUMsQ0FBQyxDQUFDLENBQUM7SUFDckYsSUFBSSxDQUFDSixNQUFNLEdBQXFCLElBQUksQ0FBQ0csc0JBQXNCLENBQUksSUFBSSxDQUFDQyxNQUFNLGFBQVUsQ0FBQyxDQUFDLENBQUMsQ0FBQztJQUV4RixJQUFJLENBQUNDLFNBQVMsQ0FBQyxDQUFDO0VBQ3BCO0VBRVVBLFNBQVNBLENBQUEsRUFBUztJQUN4QixJQUFJLENBQUNOLE9BQU8sQ0FBQ08sZ0JBQWdCLENBQUMsT0FBTyxFQUFHQyxLQUFZLElBQUssSUFBSSxDQUFDQyxPQUFPLENBQUNELEtBQUssQ0FBQyxDQUFDO0VBQ2pGO0VBRVVDLE9BQU9BLENBQUNELEtBQVksRUFBUTtJQUNsQyxJQUFJLElBQUksQ0FBQ0UsVUFBVSxFQUFFO01BQ2pCO0lBQ0o7SUFFQUYsS0FBSyxDQUFDRyxjQUFjLENBQUMsQ0FBQztJQUN0QixJQUFJLENBQUNWLE1BQU0sQ0FBQ1csS0FBSyxHQUFHLEVBQUU7SUFDdEIsSUFBSSxDQUFDWCxNQUFNLENBQUNZLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsTUFBTSxDQUFDLENBQUM7RUFDeEM7RUFFQSxJQUFjSixVQUFVQSxDQUFBLEVBQVk7SUFDaEMsT0FBTyxDQUFDLENBQUMsSUFBSSxDQUFDSyxZQUFZLENBQUMsV0FBVyxDQUFDO0VBQzNDO0FBQ0oiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9zcHJ5a2VyLWIyYy1kZW1vLXNob3AvLi9zcmMvUHl6L1l2ZXMvUHJvZHVjdERldGFpbFBhZ2UvVGhlbWUvZGVmYXVsdC9jb21wb25lbnRzL21vbGVjdWxlcy92YXJpYW50LXJlc2V0dGVyL3ZhcmlhbnQtcmVzZXR0ZXIudHMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IENvbXBvbmVudCBmcm9tICdTaG9wVWkvbW9kZWxzL2NvbXBvbmVudCc7XG5cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIFZhcmlhbnRSZXNldHRlciBleHRlbmRzIENvbXBvbmVudCB7XG4gICAgcHJvdGVjdGVkIHRyaWdnZXI6IEhUTUxFbGVtZW50O1xuICAgIHByb3RlY3RlZCB0YXJnZXQ6IEhUTUxJbnB1dEVsZW1lbnQ7XG5cbiAgICBwcm90ZWN0ZWQgcmVhZHlDYWxsYmFjaygpOiB2b2lkIHt9XG5cbiAgICBwcm90ZWN0ZWQgaW5pdCgpOiB2b2lkIHtcbiAgICAgICAgdGhpcy50cmlnZ2VyID0gPEhUTUxFbGVtZW50PnRoaXMuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShgJHt0aGlzLmpzTmFtZX1fX3RyaWdnZXJgKVswXTtcbiAgICAgICAgdGhpcy50YXJnZXQgPSA8SFRNTElucHV0RWxlbWVudD50aGlzLmdldEVsZW1lbnRzQnlDbGFzc05hbWUoYCR7dGhpcy5qc05hbWV9X190YXJnZXRgKVswXTtcblxuICAgICAgICB0aGlzLm1hcEV2ZW50cygpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBtYXBFdmVudHMoKTogdm9pZCB7XG4gICAgICAgIHRoaXMudHJpZ2dlci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChldmVudDogRXZlbnQpID0+IHRoaXMub25DbGljayhldmVudCkpO1xuICAgIH1cblxuICAgIHByb3RlY3RlZCBvbkNsaWNrKGV2ZW50OiBFdmVudCk6IHZvaWQge1xuICAgICAgICBpZiAodGhpcy5pc0FqYXhNb2RlKSB7XG4gICAgICAgICAgICByZXR1cm47XG4gICAgICAgIH1cblxuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB0aGlzLnRhcmdldC52YWx1ZSA9ICcnO1xuICAgICAgICB0aGlzLnRhcmdldC5jbG9zZXN0KCdmb3JtJykuc3VibWl0KCk7XG4gICAgfVxuXG4gICAgcHJvdGVjdGVkIGdldCBpc0FqYXhNb2RlKCk6IGJvb2xlYW4ge1xuICAgICAgICByZXR1cm4gISF0aGlzLmdldEF0dHJpYnV0ZSgnYWpheC1tb2RlJyk7XG4gICAgfVxufVxuIl0sIm5hbWVzIjpbIkNvbXBvbmVudCIsIlZhcmlhbnRSZXNldHRlciIsImNvbnN0cnVjdG9yIiwiYXJndW1lbnRzIiwidHJpZ2dlciIsInRhcmdldCIsInJlYWR5Q2FsbGJhY2siLCJpbml0IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsImpzTmFtZSIsIm1hcEV2ZW50cyIsImFkZEV2ZW50TGlzdGVuZXIiLCJldmVudCIsIm9uQ2xpY2siLCJpc0FqYXhNb2RlIiwicHJldmVudERlZmF1bHQiLCJ2YWx1ZSIsImNsb3Nlc3QiLCJzdWJtaXQiLCJnZXRBdHRyaWJ1dGUiXSwic291cmNlUm9vdCI6IiJ9
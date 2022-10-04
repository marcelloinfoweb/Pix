define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'pix',
                component: 'Funarbe_Pix/js/view/payment/method-renderer/pix-method'
            }
        );
        return Component.extend({});
    }
);
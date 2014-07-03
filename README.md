Foundation Alerts
================

Adds foundation alerts markup to magento
---------------------------------------

This extensions updates the magento html to be more inline with what is needed for foundation (mainly adding in ```<a href="#" class="close">``` and stripping some not needed ul and lis

**Note:** As you probably have foundation pulled in via your theme pulling in the js/css via this extension would probably mess up the order, for that reason I have left this out and you can just pull them in for yourself in your theme's local.xml and sass files e.g

```
<!-- In your local.xml-->
<action method="addItem"><type>skin_js</type><name>bower_components/foundation/js/foundation/foundation.alert.js</name></action>
```
            
and

```
//import the foundation sass in your main sass file
@import "alert-boxes";
```

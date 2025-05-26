gdjs.finishCode = {};
gdjs.finishCode.localVariables = [];
gdjs.finishCode.GDNewBitmapTextObjects1= [];
gdjs.finishCode.GDNewBitmapTextObjects2= [];
gdjs.finishCode.GDGreyButtonObjects1= [];
gdjs.finishCode.GDGreyButtonObjects2= [];
gdjs.finishCode.GDiyaObjects1= [];
gdjs.finishCode.GDiyaObjects2= [];
gdjs.finishCode.GDiya2Objects1= [];
gdjs.finishCode.GDiya2Objects2= [];
gdjs.finishCode.GDNewPanelSpriteObjects1= [];
gdjs.finishCode.GDNewPanelSpriteObjects2= [];


gdjs.finishCode.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("GreyButton"), gdjs.finishCode.GDGreyButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.finishCode.GDGreyButtonObjects1.length;i<l;++i) {
    if ( gdjs.finishCode.GDGreyButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.finishCode.GDGreyButtonObjects1[k] = gdjs.finishCode.GDGreyButtonObjects1[i];
        ++k;
    }
}
gdjs.finishCode.GDGreyButtonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Untitled scene", false);
}}

}


{


let isConditionTrue_0 = false;
{
gdjs.copyArray(runtimeScene.getObjects("iya"), gdjs.finishCode.GDiyaObjects1);
gdjs.copyArray(runtimeScene.getObjects("iya2"), gdjs.finishCode.GDiya2Objects1);
{for(var i = 0, len = gdjs.finishCode.GDiyaObjects1.length ;i < len;++i) {
    gdjs.finishCode.GDiyaObjects1[i].getBehavior("Text").setText("Point di peroleh: " + gdjs.evtTools.common.toString(runtimeScene.getGame().getVariables().getFromIndex(0).getAsNumber()));
}
}{for(var i = 0, len = gdjs.finishCode.GDiya2Objects1.length ;i < len;++i) {
    gdjs.finishCode.GDiya2Objects1[i].getBehavior("Text").setText("Point oop Diperoleh: " + gdjs.evtTools.common.toString(runtimeScene.getGame().getVariables().getFromIndex(1).getAsNumber()));
}
}}

}


};

gdjs.finishCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.finishCode.GDNewBitmapTextObjects1.length = 0;
gdjs.finishCode.GDNewBitmapTextObjects2.length = 0;
gdjs.finishCode.GDGreyButtonObjects1.length = 0;
gdjs.finishCode.GDGreyButtonObjects2.length = 0;
gdjs.finishCode.GDiyaObjects1.length = 0;
gdjs.finishCode.GDiyaObjects2.length = 0;
gdjs.finishCode.GDiya2Objects1.length = 0;
gdjs.finishCode.GDiya2Objects2.length = 0;
gdjs.finishCode.GDNewPanelSpriteObjects1.length = 0;
gdjs.finishCode.GDNewPanelSpriteObjects2.length = 0;

gdjs.finishCode.eventsList0(runtimeScene);
gdjs.finishCode.GDNewBitmapTextObjects1.length = 0;
gdjs.finishCode.GDNewBitmapTextObjects2.length = 0;
gdjs.finishCode.GDGreyButtonObjects1.length = 0;
gdjs.finishCode.GDGreyButtonObjects2.length = 0;
gdjs.finishCode.GDiyaObjects1.length = 0;
gdjs.finishCode.GDiyaObjects2.length = 0;
gdjs.finishCode.GDiya2Objects1.length = 0;
gdjs.finishCode.GDiya2Objects2.length = 0;
gdjs.finishCode.GDNewPanelSpriteObjects1.length = 0;
gdjs.finishCode.GDNewPanelSpriteObjects2.length = 0;


return;

}

gdjs['finishCode'] = gdjs.finishCode;

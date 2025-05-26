gdjs.koinkurangCode = {};
gdjs.koinkurangCode.localVariables = [];
gdjs.koinkurangCode.GDNewBitmapTextObjects1= [];
gdjs.koinkurangCode.GDNewBitmapTextObjects2= [];
gdjs.koinkurangCode.GDGreyButtonObjects1= [];
gdjs.koinkurangCode.GDGreyButtonObjects2= [];
gdjs.koinkurangCode.GDNewPanelSpriteObjects1= [];
gdjs.koinkurangCode.GDNewPanelSpriteObjects2= [];


gdjs.koinkurangCode.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("GreyButton"), gdjs.koinkurangCode.GDGreyButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.koinkurangCode.GDGreyButtonObjects1.length;i<l;++i) {
    if ( gdjs.koinkurangCode.GDGreyButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.koinkurangCode.GDGreyButtonObjects1[k] = gdjs.koinkurangCode.GDGreyButtonObjects1[i];
        ++k;
    }
}
gdjs.koinkurangCode.GDGreyButtonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Untitled scene", false);
}}

}


{


let isConditionTrue_0 = false;
{
}

}


};

gdjs.koinkurangCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.koinkurangCode.GDNewBitmapTextObjects1.length = 0;
gdjs.koinkurangCode.GDNewBitmapTextObjects2.length = 0;
gdjs.koinkurangCode.GDGreyButtonObjects1.length = 0;
gdjs.koinkurangCode.GDGreyButtonObjects2.length = 0;
gdjs.koinkurangCode.GDNewPanelSpriteObjects1.length = 0;
gdjs.koinkurangCode.GDNewPanelSpriteObjects2.length = 0;

gdjs.koinkurangCode.eventsList0(runtimeScene);
gdjs.koinkurangCode.GDNewBitmapTextObjects1.length = 0;
gdjs.koinkurangCode.GDNewBitmapTextObjects2.length = 0;
gdjs.koinkurangCode.GDGreyButtonObjects1.length = 0;
gdjs.koinkurangCode.GDGreyButtonObjects2.length = 0;
gdjs.koinkurangCode.GDNewPanelSpriteObjects1.length = 0;
gdjs.koinkurangCode.GDNewPanelSpriteObjects2.length = 0;


return;

}

gdjs['koinkurangCode'] = gdjs.koinkurangCode;

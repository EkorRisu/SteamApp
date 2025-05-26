gdjs.loseCode = {};
gdjs.loseCode.localVariables = [];
gdjs.loseCode.GDNewBitmapTextObjects1= [];
gdjs.loseCode.GDNewBitmapTextObjects2= [];
gdjs.loseCode.GDGreyButtonObjects1= [];
gdjs.loseCode.GDGreyButtonObjects2= [];
gdjs.loseCode.GDNewPanelSpriteObjects1= [];
gdjs.loseCode.GDNewPanelSpriteObjects2= [];
gdjs.loseCode.GDNewPanelSprite2Objects1= [];
gdjs.loseCode.GDNewPanelSprite2Objects2= [];


gdjs.loseCode.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("GreyButton"), gdjs.loseCode.GDGreyButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.loseCode.GDGreyButtonObjects1.length;i<l;++i) {
    if ( gdjs.loseCode.GDGreyButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.loseCode.GDGreyButtonObjects1[k] = gdjs.loseCode.GDGreyButtonObjects1[i];
        ++k;
    }
}
gdjs.loseCode.GDGreyButtonObjects1.length = k;
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

gdjs.loseCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.loseCode.GDNewBitmapTextObjects1.length = 0;
gdjs.loseCode.GDNewBitmapTextObjects2.length = 0;
gdjs.loseCode.GDGreyButtonObjects1.length = 0;
gdjs.loseCode.GDGreyButtonObjects2.length = 0;
gdjs.loseCode.GDNewPanelSpriteObjects1.length = 0;
gdjs.loseCode.GDNewPanelSpriteObjects2.length = 0;
gdjs.loseCode.GDNewPanelSprite2Objects1.length = 0;
gdjs.loseCode.GDNewPanelSprite2Objects2.length = 0;

gdjs.loseCode.eventsList0(runtimeScene);
gdjs.loseCode.GDNewBitmapTextObjects1.length = 0;
gdjs.loseCode.GDNewBitmapTextObjects2.length = 0;
gdjs.loseCode.GDGreyButtonObjects1.length = 0;
gdjs.loseCode.GDGreyButtonObjects2.length = 0;
gdjs.loseCode.GDNewPanelSpriteObjects1.length = 0;
gdjs.loseCode.GDNewPanelSpriteObjects2.length = 0;
gdjs.loseCode.GDNewPanelSprite2Objects1.length = 0;
gdjs.loseCode.GDNewPanelSprite2Objects2.length = 0;


return;

}

gdjs['loseCode'] = gdjs.loseCode;

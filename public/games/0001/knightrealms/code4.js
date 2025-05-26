gdjs.scene_32mulaiiCode = {};
gdjs.scene_32mulaiiCode.localVariables = [];
gdjs.scene_32mulaiiCode.GDBorderedHudObjects1= [];
gdjs.scene_32mulaiiCode.GDBorderedHudObjects2= [];
gdjs.scene_32mulaiiCode.GDNewBitmapTextObjects1= [];
gdjs.scene_32mulaiiCode.GDNewBitmapTextObjects2= [];
gdjs.scene_32mulaiiCode.GDwelcomeObjects1= [];
gdjs.scene_32mulaiiCode.GDwelcomeObjects2= [];
gdjs.scene_32mulaiiCode.GDHollyObjects1= [];
gdjs.scene_32mulaiiCode.GDHollyObjects2= [];
gdjs.scene_32mulaiiCode.GDBlueButtonObjects1= [];
gdjs.scene_32mulaiiCode.GDBlueButtonObjects2= [];
gdjs.scene_32mulaiiCode.GDBlueButton2Objects1= [];
gdjs.scene_32mulaiiCode.GDBlueButton2Objects2= [];


gdjs.scene_32mulaiiCode.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("BlueButton"), gdjs.scene_32mulaiiCode.GDBlueButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.scene_32mulaiiCode.GDBlueButtonObjects1.length;i<l;++i) {
    if ( gdjs.scene_32mulaiiCode.GDBlueButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.scene_32mulaiiCode.GDBlueButtonObjects1[k] = gdjs.scene_32mulaiiCode.GDBlueButtonObjects1[i];
        ++k;
    }
}
gdjs.scene_32mulaiiCode.GDBlueButtonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Untitled scene", false);
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("BlueButton2"), gdjs.scene_32mulaiiCode.GDBlueButton2Objects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.scene_32mulaiiCode.GDBlueButton2Objects1.length;i<l;++i) {
    if ( gdjs.scene_32mulaiiCode.GDBlueButton2Objects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.scene_32mulaiiCode.GDBlueButton2Objects1[k] = gdjs.scene_32mulaiiCode.GDBlueButton2Objects1[i];
        ++k;
    }
}
gdjs.scene_32mulaiiCode.GDBlueButton2Objects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.stopGame(runtimeScene);
}}

}


};

gdjs.scene_32mulaiiCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.scene_32mulaiiCode.GDBorderedHudObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDBorderedHudObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDNewBitmapTextObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDNewBitmapTextObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDwelcomeObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDwelcomeObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDHollyObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDHollyObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButtonObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButtonObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButton2Objects1.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButton2Objects2.length = 0;

gdjs.scene_32mulaiiCode.eventsList0(runtimeScene);
gdjs.scene_32mulaiiCode.GDBorderedHudObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDBorderedHudObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDNewBitmapTextObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDNewBitmapTextObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDwelcomeObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDwelcomeObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDHollyObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDHollyObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButtonObjects1.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButtonObjects2.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButton2Objects1.length = 0;
gdjs.scene_32mulaiiCode.GDBlueButton2Objects2.length = 0;


return;

}

gdjs['scene_32mulaiiCode'] = gdjs.scene_32mulaiiCode;

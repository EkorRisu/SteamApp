gdjs.WINCode = {};
gdjs.WINCode.localVariables = [];
gdjs.WINCode.GDYOU_9595WINNObjects1= [];
gdjs.WINCode.GDYOU_9595WINNObjects2= [];
gdjs.WINCode.GDtamatObjects1= [];
gdjs.WINCode.GDtamatObjects2= [];
gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1= [];
gdjs.WINCode.GDBlackSquareDecoratedButtonObjects2= [];
gdjs.WINCode.GDNewSpriteObjects1= [];
gdjs.WINCode.GDNewSpriteObjects2= [];


gdjs.WINCode.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("BlackSquareDecoratedButton"), gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1.length;i<l;++i) {
    if ( gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1[k] = gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1[i];
        ++k;
    }
}
gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Untitled scene", false);
}}

}


{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
if (isConditionTrue_0) {
{gdjs.evtTools.sound.playSound(runtimeScene, "safe-and-sound-bang-windah.mp3", true, 100, 1);
}}

}


};

gdjs.WINCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.WINCode.GDYOU_9595WINNObjects1.length = 0;
gdjs.WINCode.GDYOU_9595WINNObjects2.length = 0;
gdjs.WINCode.GDtamatObjects1.length = 0;
gdjs.WINCode.GDtamatObjects2.length = 0;
gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1.length = 0;
gdjs.WINCode.GDBlackSquareDecoratedButtonObjects2.length = 0;
gdjs.WINCode.GDNewSpriteObjects1.length = 0;
gdjs.WINCode.GDNewSpriteObjects2.length = 0;

gdjs.WINCode.eventsList0(runtimeScene);
gdjs.WINCode.GDYOU_9595WINNObjects1.length = 0;
gdjs.WINCode.GDYOU_9595WINNObjects2.length = 0;
gdjs.WINCode.GDtamatObjects1.length = 0;
gdjs.WINCode.GDtamatObjects2.length = 0;
gdjs.WINCode.GDBlackSquareDecoratedButtonObjects1.length = 0;
gdjs.WINCode.GDBlackSquareDecoratedButtonObjects2.length = 0;
gdjs.WINCode.GDNewSpriteObjects1.length = 0;
gdjs.WINCode.GDNewSpriteObjects2.length = 0;


return;

}

gdjs['WINCode'] = gdjs.WINCode;

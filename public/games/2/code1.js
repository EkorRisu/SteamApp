gdjs.retryCode = {};
gdjs.retryCode.localVariables = [];
gdjs.retryCode.GDRetryObjects1= [];
gdjs.retryCode.GDRetryObjects2= [];
gdjs.retryCode.GDalasanObjects1= [];
gdjs.retryCode.GDalasanObjects2= [];
gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1= [];
gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects2= [];


gdjs.retryCode.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("WhiteSquareDecoratedButton"), gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1.length;i<l;++i) {
    if ( gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1[k] = gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1[i];
        ++k;
    }
}
gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Untitled scene", false);
}}

}


{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
if (isConditionTrue_0) {
{gdjs.evtTools.sound.playSound(runtimeScene, "spongebob-fail.mp3", false, 100, 1);
}}

}


};

gdjs.retryCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.retryCode.GDRetryObjects1.length = 0;
gdjs.retryCode.GDRetryObjects2.length = 0;
gdjs.retryCode.GDalasanObjects1.length = 0;
gdjs.retryCode.GDalasanObjects2.length = 0;
gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1.length = 0;
gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects2.length = 0;

gdjs.retryCode.eventsList0(runtimeScene);
gdjs.retryCode.GDRetryObjects1.length = 0;
gdjs.retryCode.GDRetryObjects2.length = 0;
gdjs.retryCode.GDalasanObjects1.length = 0;
gdjs.retryCode.GDalasanObjects2.length = 0;
gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects1.length = 0;
gdjs.retryCode.GDWhiteSquareDecoratedButtonObjects2.length = 0;


return;

}

gdjs['retryCode'] = gdjs.retryCode;

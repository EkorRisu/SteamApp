gdjs.healt_32goneCode = {};
gdjs.healt_32goneCode.localVariables = [];
gdjs.healt_32goneCode.GDRetryObjects1= [];
gdjs.healt_32goneCode.GDRetryObjects2= [];
gdjs.healt_32goneCode.GDalasanObjects1= [];
gdjs.healt_32goneCode.GDalasanObjects2= [];
gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1= [];
gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects2= [];


gdjs.healt_32goneCode.eventsList0 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("WhiteSquareDecoratedButton"), gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1.length;i<l;++i) {
    if ( gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1[k] = gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1[i];
        ++k;
    }
}
gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Untitled scene", false);
}}

}


{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
if (isConditionTrue_0) {
{gdjs.evtTools.sound.playSound(runtimeScene, "suara-rem-truk-sumatra-sulawesi-kalimantan.mp3", true, 100, 1);
}}

}


};

gdjs.healt_32goneCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.healt_32goneCode.GDRetryObjects1.length = 0;
gdjs.healt_32goneCode.GDRetryObjects2.length = 0;
gdjs.healt_32goneCode.GDalasanObjects1.length = 0;
gdjs.healt_32goneCode.GDalasanObjects2.length = 0;
gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1.length = 0;
gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects2.length = 0;

gdjs.healt_32goneCode.eventsList0(runtimeScene);
gdjs.healt_32goneCode.GDRetryObjects1.length = 0;
gdjs.healt_32goneCode.GDRetryObjects2.length = 0;
gdjs.healt_32goneCode.GDalasanObjects1.length = 0;
gdjs.healt_32goneCode.GDalasanObjects2.length = 0;
gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects1.length = 0;
gdjs.healt_32goneCode.GDWhiteSquareDecoratedButtonObjects2.length = 0;


return;

}

gdjs['healt_32goneCode'] = gdjs.healt_32goneCode;

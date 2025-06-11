gdjs.Lose_32gAMECode = {};
gdjs.Lose_32gAMECode.localVariables = [];
gdjs.Lose_32gAMECode.GDStarryBackgroundSolidColourObjects1= [];
gdjs.Lose_32gAMECode.GDStarryBackgroundSolidColourObjects2= [];
gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1= [];
gdjs.Lose_32gAMECode.GDlose_9595buttonObjects2= [];
gdjs.Lose_32gAMECode.GDLose_9595GameObjects1= [];
gdjs.Lose_32gAMECode.GDLose_9595GameObjects2= [];


gdjs.Lose_32gAMECode.eventsList0 = function(runtimeScene) {

{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
if (isConditionTrue_0) {
{gdjs.evtTools.sound.playSound(runtimeScene, "error_CDOxCYm.mp3", false, 100, 1);
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("lose_button"), gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1.length;i<l;++i) {
    if ( gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1[k] = gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1[i];
        ++k;
    }
}
gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "FullSokobanGame", false);
}}

}


};

gdjs.Lose_32gAMECode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.Lose_32gAMECode.GDStarryBackgroundSolidColourObjects1.length = 0;
gdjs.Lose_32gAMECode.GDStarryBackgroundSolidColourObjects2.length = 0;
gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1.length = 0;
gdjs.Lose_32gAMECode.GDlose_9595buttonObjects2.length = 0;
gdjs.Lose_32gAMECode.GDLose_9595GameObjects1.length = 0;
gdjs.Lose_32gAMECode.GDLose_9595GameObjects2.length = 0;

gdjs.Lose_32gAMECode.eventsList0(runtimeScene);
gdjs.Lose_32gAMECode.GDStarryBackgroundSolidColourObjects1.length = 0;
gdjs.Lose_32gAMECode.GDStarryBackgroundSolidColourObjects2.length = 0;
gdjs.Lose_32gAMECode.GDlose_9595buttonObjects1.length = 0;
gdjs.Lose_32gAMECode.GDlose_9595buttonObjects2.length = 0;
gdjs.Lose_32gAMECode.GDLose_9595GameObjects1.length = 0;
gdjs.Lose_32gAMECode.GDLose_9595GameObjects2.length = 0;


return;

}

gdjs['Lose_32gAMECode'] = gdjs.Lose_32gAMECode;

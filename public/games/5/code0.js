gdjs.homescreenCode = {};
gdjs.homescreenCode.localVariables = [];
gdjs.homescreenCode.GDPlayerObjects1= [];
gdjs.homescreenCode.GDPlayerObjects2= [];
gdjs.homescreenCode.GDPlayerObjects3= [];
gdjs.homescreenCode.GDBoxObjects1= [];
gdjs.homescreenCode.GDBoxObjects2= [];
gdjs.homescreenCode.GDBoxObjects3= [];
gdjs.homescreenCode.GDMarkerObjects1= [];
gdjs.homescreenCode.GDMarkerObjects2= [];
gdjs.homescreenCode.GDMarkerObjects3= [];
gdjs.homescreenCode.GDFloorObjects1= [];
gdjs.homescreenCode.GDFloorObjects2= [];
gdjs.homescreenCode.GDFloorObjects3= [];
gdjs.homescreenCode.GDGoalObjects1= [];
gdjs.homescreenCode.GDGoalObjects2= [];
gdjs.homescreenCode.GDGoalObjects3= [];
gdjs.homescreenCode.GDResetGameButtonObjects1= [];
gdjs.homescreenCode.GDResetGameButtonObjects2= [];
gdjs.homescreenCode.GDResetGameButtonObjects3= [];
gdjs.homescreenCode.GDYouWinObjects1= [];
gdjs.homescreenCode.GDYouWinObjects2= [];
gdjs.homescreenCode.GDYouWinObjects3= [];
gdjs.homescreenCode.GDUpKeyObjects1= [];
gdjs.homescreenCode.GDUpKeyObjects2= [];
gdjs.homescreenCode.GDUpKeyObjects3= [];
gdjs.homescreenCode.GDRightKeyObjects1= [];
gdjs.homescreenCode.GDRightKeyObjects2= [];
gdjs.homescreenCode.GDRightKeyObjects3= [];
gdjs.homescreenCode.GDLeftKeyObjects1= [];
gdjs.homescreenCode.GDLeftKeyObjects2= [];
gdjs.homescreenCode.GDLeftKeyObjects3= [];
gdjs.homescreenCode.GDDownKeyObjects1= [];
gdjs.homescreenCode.GDDownKeyObjects2= [];
gdjs.homescreenCode.GDDownKeyObjects3= [];
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects1= [];
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects2= [];
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects3= [];
gdjs.homescreenCode.GDhome_9595screenObjects1= [];
gdjs.homescreenCode.GDhome_9595screenObjects2= [];
gdjs.homescreenCode.GDhome_9595screenObjects3= [];
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects1= [];
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects2= [];
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects3= [];
gdjs.homescreenCode.GDhow_9595to_9595playObjects1= [];
gdjs.homescreenCode.GDhow_9595to_9595playObjects2= [];
gdjs.homescreenCode.GDhow_9595to_9595playObjects3= [];
gdjs.homescreenCode.GDstartObjects1= [];
gdjs.homescreenCode.GDstartObjects2= [];
gdjs.homescreenCode.GDstartObjects3= [];
gdjs.homescreenCode.GDtimerObjects1= [];
gdjs.homescreenCode.GDtimerObjects2= [];
gdjs.homescreenCode.GDtimerObjects3= [];
gdjs.homescreenCode.GDNewSpriteObjects1= [];
gdjs.homescreenCode.GDNewSpriteObjects2= [];
gdjs.homescreenCode.GDNewSpriteObjects3= [];
gdjs.homescreenCode.GDnext_9595levelObjects1= [];
gdjs.homescreenCode.GDnext_9595levelObjects2= [];
gdjs.homescreenCode.GDnext_9595levelObjects3= [];
gdjs.homescreenCode.GDplayObjects1= [];
gdjs.homescreenCode.GDplayObjects2= [];
gdjs.homescreenCode.GDplayObjects3= [];


gdjs.homescreenCode.eventsList0 = function(runtimeScene) {

{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
if (isConditionTrue_0) {
{gdjs.evtTools.camera.showLayer(runtimeScene, "Home screen");
}{gdjs.evtTools.sound.playSound(runtimeScene, "Cipher - Kevin Macleod.mp3", false, 100, 1);
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("start"), gdjs.homescreenCode.GDstartObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.homescreenCode.GDstartObjects1.length;i<l;++i) {
    if ( gdjs.homescreenCode.GDstartObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.homescreenCode.GDstartObjects1[k] = gdjs.homescreenCode.GDstartObjects1[i];
        ++k;
    }
}
gdjs.homescreenCode.GDstartObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "FullSokobanGame", false);
}}

}


};gdjs.homescreenCode.eventsList1 = function(runtimeScene) {

{


gdjs.homescreenCode.eventsList0(runtimeScene);
}


};

gdjs.homescreenCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.homescreenCode.GDPlayerObjects1.length = 0;
gdjs.homescreenCode.GDPlayerObjects2.length = 0;
gdjs.homescreenCode.GDPlayerObjects3.length = 0;
gdjs.homescreenCode.GDBoxObjects1.length = 0;
gdjs.homescreenCode.GDBoxObjects2.length = 0;
gdjs.homescreenCode.GDBoxObjects3.length = 0;
gdjs.homescreenCode.GDMarkerObjects1.length = 0;
gdjs.homescreenCode.GDMarkerObjects2.length = 0;
gdjs.homescreenCode.GDMarkerObjects3.length = 0;
gdjs.homescreenCode.GDFloorObjects1.length = 0;
gdjs.homescreenCode.GDFloorObjects2.length = 0;
gdjs.homescreenCode.GDFloorObjects3.length = 0;
gdjs.homescreenCode.GDGoalObjects1.length = 0;
gdjs.homescreenCode.GDGoalObjects2.length = 0;
gdjs.homescreenCode.GDGoalObjects3.length = 0;
gdjs.homescreenCode.GDResetGameButtonObjects1.length = 0;
gdjs.homescreenCode.GDResetGameButtonObjects2.length = 0;
gdjs.homescreenCode.GDResetGameButtonObjects3.length = 0;
gdjs.homescreenCode.GDYouWinObjects1.length = 0;
gdjs.homescreenCode.GDYouWinObjects2.length = 0;
gdjs.homescreenCode.GDYouWinObjects3.length = 0;
gdjs.homescreenCode.GDUpKeyObjects1.length = 0;
gdjs.homescreenCode.GDUpKeyObjects2.length = 0;
gdjs.homescreenCode.GDUpKeyObjects3.length = 0;
gdjs.homescreenCode.GDRightKeyObjects1.length = 0;
gdjs.homescreenCode.GDRightKeyObjects2.length = 0;
gdjs.homescreenCode.GDRightKeyObjects3.length = 0;
gdjs.homescreenCode.GDLeftKeyObjects1.length = 0;
gdjs.homescreenCode.GDLeftKeyObjects2.length = 0;
gdjs.homescreenCode.GDLeftKeyObjects3.length = 0;
gdjs.homescreenCode.GDDownKeyObjects1.length = 0;
gdjs.homescreenCode.GDDownKeyObjects2.length = 0;
gdjs.homescreenCode.GDDownKeyObjects3.length = 0;
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects1.length = 0;
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects2.length = 0;
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects3.length = 0;
gdjs.homescreenCode.GDhome_9595screenObjects1.length = 0;
gdjs.homescreenCode.GDhome_9595screenObjects2.length = 0;
gdjs.homescreenCode.GDhome_9595screenObjects3.length = 0;
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects1.length = 0;
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects2.length = 0;
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects3.length = 0;
gdjs.homescreenCode.GDhow_9595to_9595playObjects1.length = 0;
gdjs.homescreenCode.GDhow_9595to_9595playObjects2.length = 0;
gdjs.homescreenCode.GDhow_9595to_9595playObjects3.length = 0;
gdjs.homescreenCode.GDstartObjects1.length = 0;
gdjs.homescreenCode.GDstartObjects2.length = 0;
gdjs.homescreenCode.GDstartObjects3.length = 0;
gdjs.homescreenCode.GDtimerObjects1.length = 0;
gdjs.homescreenCode.GDtimerObjects2.length = 0;
gdjs.homescreenCode.GDtimerObjects3.length = 0;
gdjs.homescreenCode.GDNewSpriteObjects1.length = 0;
gdjs.homescreenCode.GDNewSpriteObjects2.length = 0;
gdjs.homescreenCode.GDNewSpriteObjects3.length = 0;
gdjs.homescreenCode.GDnext_9595levelObjects1.length = 0;
gdjs.homescreenCode.GDnext_9595levelObjects2.length = 0;
gdjs.homescreenCode.GDnext_9595levelObjects3.length = 0;
gdjs.homescreenCode.GDplayObjects1.length = 0;
gdjs.homescreenCode.GDplayObjects2.length = 0;
gdjs.homescreenCode.GDplayObjects3.length = 0;

gdjs.homescreenCode.eventsList1(runtimeScene);
gdjs.homescreenCode.GDPlayerObjects1.length = 0;
gdjs.homescreenCode.GDPlayerObjects2.length = 0;
gdjs.homescreenCode.GDPlayerObjects3.length = 0;
gdjs.homescreenCode.GDBoxObjects1.length = 0;
gdjs.homescreenCode.GDBoxObjects2.length = 0;
gdjs.homescreenCode.GDBoxObjects3.length = 0;
gdjs.homescreenCode.GDMarkerObjects1.length = 0;
gdjs.homescreenCode.GDMarkerObjects2.length = 0;
gdjs.homescreenCode.GDMarkerObjects3.length = 0;
gdjs.homescreenCode.GDFloorObjects1.length = 0;
gdjs.homescreenCode.GDFloorObjects2.length = 0;
gdjs.homescreenCode.GDFloorObjects3.length = 0;
gdjs.homescreenCode.GDGoalObjects1.length = 0;
gdjs.homescreenCode.GDGoalObjects2.length = 0;
gdjs.homescreenCode.GDGoalObjects3.length = 0;
gdjs.homescreenCode.GDResetGameButtonObjects1.length = 0;
gdjs.homescreenCode.GDResetGameButtonObjects2.length = 0;
gdjs.homescreenCode.GDResetGameButtonObjects3.length = 0;
gdjs.homescreenCode.GDYouWinObjects1.length = 0;
gdjs.homescreenCode.GDYouWinObjects2.length = 0;
gdjs.homescreenCode.GDYouWinObjects3.length = 0;
gdjs.homescreenCode.GDUpKeyObjects1.length = 0;
gdjs.homescreenCode.GDUpKeyObjects2.length = 0;
gdjs.homescreenCode.GDUpKeyObjects3.length = 0;
gdjs.homescreenCode.GDRightKeyObjects1.length = 0;
gdjs.homescreenCode.GDRightKeyObjects2.length = 0;
gdjs.homescreenCode.GDRightKeyObjects3.length = 0;
gdjs.homescreenCode.GDLeftKeyObjects1.length = 0;
gdjs.homescreenCode.GDLeftKeyObjects2.length = 0;
gdjs.homescreenCode.GDLeftKeyObjects3.length = 0;
gdjs.homescreenCode.GDDownKeyObjects1.length = 0;
gdjs.homescreenCode.GDDownKeyObjects2.length = 0;
gdjs.homescreenCode.GDDownKeyObjects3.length = 0;
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects1.length = 0;
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects2.length = 0;
gdjs.homescreenCode.GDTilemap_9595ObstaclesObjects3.length = 0;
gdjs.homescreenCode.GDhome_9595screenObjects1.length = 0;
gdjs.homescreenCode.GDhome_9595screenObjects2.length = 0;
gdjs.homescreenCode.GDhome_9595screenObjects3.length = 0;
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects1.length = 0;
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects2.length = 0;
gdjs.homescreenCode.GDbg_9595how_9595to_9595playObjects3.length = 0;
gdjs.homescreenCode.GDhow_9595to_9595playObjects1.length = 0;
gdjs.homescreenCode.GDhow_9595to_9595playObjects2.length = 0;
gdjs.homescreenCode.GDhow_9595to_9595playObjects3.length = 0;
gdjs.homescreenCode.GDstartObjects1.length = 0;
gdjs.homescreenCode.GDstartObjects2.length = 0;
gdjs.homescreenCode.GDstartObjects3.length = 0;
gdjs.homescreenCode.GDtimerObjects1.length = 0;
gdjs.homescreenCode.GDtimerObjects2.length = 0;
gdjs.homescreenCode.GDtimerObjects3.length = 0;
gdjs.homescreenCode.GDNewSpriteObjects1.length = 0;
gdjs.homescreenCode.GDNewSpriteObjects2.length = 0;
gdjs.homescreenCode.GDNewSpriteObjects3.length = 0;
gdjs.homescreenCode.GDnext_9595levelObjects1.length = 0;
gdjs.homescreenCode.GDnext_9595levelObjects2.length = 0;
gdjs.homescreenCode.GDnext_9595levelObjects3.length = 0;
gdjs.homescreenCode.GDplayObjects1.length = 0;
gdjs.homescreenCode.GDplayObjects2.length = 0;
gdjs.homescreenCode.GDplayObjects3.length = 0;


return;

}

gdjs['homescreenCode'] = gdjs.homescreenCode;

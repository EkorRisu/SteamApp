gdjs.FullSokobanGameCode = {};
gdjs.FullSokobanGameCode.localVariables = [];
gdjs.FullSokobanGameCode.GDDownKeyObjects1_1final = [];

gdjs.FullSokobanGameCode.GDDownKeyObjects2_1final = [];

gdjs.FullSokobanGameCode.GDGoalObjects2_1final = [];

gdjs.FullSokobanGameCode.GDLeftKeyObjects1_1final = [];

gdjs.FullSokobanGameCode.GDLeftKeyObjects2_1final = [];

gdjs.FullSokobanGameCode.GDMarkerObjects2_1final = [];

gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final = [];

gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2_1final = [];

gdjs.FullSokobanGameCode.GDUpKeyObjects1_1final = [];

gdjs.FullSokobanGameCode.GDUpKeyObjects2_1final = [];

gdjs.FullSokobanGameCode.GDPlayerObjects1= [];
gdjs.FullSokobanGameCode.GDPlayerObjects2= [];
gdjs.FullSokobanGameCode.GDPlayerObjects3= [];
gdjs.FullSokobanGameCode.GDBoxObjects1= [];
gdjs.FullSokobanGameCode.GDBoxObjects2= [];
gdjs.FullSokobanGameCode.GDBoxObjects3= [];
gdjs.FullSokobanGameCode.GDMarkerObjects1= [];
gdjs.FullSokobanGameCode.GDMarkerObjects2= [];
gdjs.FullSokobanGameCode.GDMarkerObjects3= [];
gdjs.FullSokobanGameCode.GDFloorObjects1= [];
gdjs.FullSokobanGameCode.GDFloorObjects2= [];
gdjs.FullSokobanGameCode.GDFloorObjects3= [];
gdjs.FullSokobanGameCode.GDGoalObjects1= [];
gdjs.FullSokobanGameCode.GDGoalObjects2= [];
gdjs.FullSokobanGameCode.GDGoalObjects3= [];
gdjs.FullSokobanGameCode.GDResetGameButtonObjects1= [];
gdjs.FullSokobanGameCode.GDResetGameButtonObjects2= [];
gdjs.FullSokobanGameCode.GDResetGameButtonObjects3= [];
gdjs.FullSokobanGameCode.GDYouWinObjects1= [];
gdjs.FullSokobanGameCode.GDYouWinObjects2= [];
gdjs.FullSokobanGameCode.GDYouWinObjects3= [];
gdjs.FullSokobanGameCode.GDUpKeyObjects1= [];
gdjs.FullSokobanGameCode.GDUpKeyObjects2= [];
gdjs.FullSokobanGameCode.GDUpKeyObjects3= [];
gdjs.FullSokobanGameCode.GDRightKeyObjects1= [];
gdjs.FullSokobanGameCode.GDRightKeyObjects2= [];
gdjs.FullSokobanGameCode.GDRightKeyObjects3= [];
gdjs.FullSokobanGameCode.GDLeftKeyObjects1= [];
gdjs.FullSokobanGameCode.GDLeftKeyObjects2= [];
gdjs.FullSokobanGameCode.GDLeftKeyObjects3= [];
gdjs.FullSokobanGameCode.GDDownKeyObjects1= [];
gdjs.FullSokobanGameCode.GDDownKeyObjects2= [];
gdjs.FullSokobanGameCode.GDDownKeyObjects3= [];
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects1= [];
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2= [];
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3= [];
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects1= [];
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects2= [];
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects3= [];
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects1= [];
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects2= [];
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects3= [];
gdjs.FullSokobanGameCode.GDtimerObjects1= [];
gdjs.FullSokobanGameCode.GDtimerObjects2= [];
gdjs.FullSokobanGameCode.GDtimerObjects3= [];
gdjs.FullSokobanGameCode.GDNewSpriteObjects1= [];
gdjs.FullSokobanGameCode.GDNewSpriteObjects2= [];
gdjs.FullSokobanGameCode.GDNewSpriteObjects3= [];
gdjs.FullSokobanGameCode.GDplayObjects1= [];
gdjs.FullSokobanGameCode.GDplayObjects2= [];
gdjs.FullSokobanGameCode.GDplayObjects3= [];
gdjs.FullSokobanGameCode.GDnext_9595level2Objects1= [];
gdjs.FullSokobanGameCode.GDnext_9595level2Objects2= [];
gdjs.FullSokobanGameCode.GDnext_9595level2Objects3= [];
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects1= [];
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects2= [];
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects3= [];
gdjs.FullSokobanGameCode.GDLevelObjects1= [];
gdjs.FullSokobanGameCode.GDLevelObjects2= [];
gdjs.FullSokobanGameCode.GDLevelObjects3= [];
gdjs.FullSokobanGameCode.GDpetunjukObjects1= [];
gdjs.FullSokobanGameCode.GDpetunjukObjects2= [];
gdjs.FullSokobanGameCode.GDpetunjukObjects3= [];


gdjs.FullSokobanGameCode.eventsList0 = function(runtimeScene) {

{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
if (isConditionTrue_0) {
{gdjs.evtTools.camera.showLayer(runtimeScene, "how to play");
}}

}


};gdjs.FullSokobanGameCode.eventsList1 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("play"), gdjs.FullSokobanGameCode.GDplayObjects2);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDplayObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDplayObjects2[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.FullSokobanGameCode.GDplayObjects2[k] = gdjs.FullSokobanGameCode.GDplayObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDplayObjects2.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.camera.hideLayer(runtimeScene, "how to play");
}{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "timer");
}{gdjs.evtTools.sound.playSound(runtimeScene, "Cipher - Kevin Macleod.mp3", true, 50, 1);
}}

}


{


let isConditionTrue_0 = false;
{
gdjs.copyArray(runtimeScene.getObjects("timer"), gdjs.FullSokobanGameCode.GDtimerObjects2);
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDtimerObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDtimerObjects2[i].getBehavior("Text").setText(gdjs.evtTools.common.toString(Math.round(Math.abs(gdjs.evtTools.runtimeScene.getTimerElapsedTimeInSeconds(runtimeScene, "timer") - 200))));
}
}}

}


{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.runtimeScene.getTimerElapsedTimeInSecondsOrNaN(runtimeScene, "timer") >= 200;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.pauseTimer(runtimeScene, "timer");
}{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Lose gAME", false);
}}

}


};gdjs.FullSokobanGameCode.eventsList2 = function(runtimeScene) {

{



}


{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = !(gdjs.evtTools.systemInfo.hasTouchScreen(runtimeScene));
if (isConditionTrue_0) {
isConditionTrue_0 = false;
{isConditionTrue_0 = runtimeScene.getOnceTriggers().triggerOnce(11208604);
}
}
if (isConditionTrue_0) {
gdjs.copyArray(runtimeScene.getObjects("DownKey"), gdjs.FullSokobanGameCode.GDDownKeyObjects1);
gdjs.copyArray(runtimeScene.getObjects("LeftKey"), gdjs.FullSokobanGameCode.GDLeftKeyObjects1);
gdjs.copyArray(runtimeScene.getObjects("RightKey"), gdjs.FullSokobanGameCode.GDRightKeyObjects1);
gdjs.copyArray(runtimeScene.getObjects("UpKey"), gdjs.FullSokobanGameCode.GDUpKeyObjects1);
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDUpKeyObjects1.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDUpKeyObjects1[i].deleteFromScene(runtimeScene);
}
for(var i = 0, len = gdjs.FullSokobanGameCode.GDRightKeyObjects1.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDRightKeyObjects1[i].deleteFromScene(runtimeScene);
}
for(var i = 0, len = gdjs.FullSokobanGameCode.GDLeftKeyObjects1.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDLeftKeyObjects1[i].deleteFromScene(runtimeScene);
}
for(var i = 0, len = gdjs.FullSokobanGameCode.GDDownKeyObjects1.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDDownKeyObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


};gdjs.FullSokobanGameCode.eventsList3 = function(runtimeScene) {

{

gdjs.copyArray(gdjs.FullSokobanGameCode.GDLeftKeyObjects1, gdjs.FullSokobanGameCode.GDLeftKeyObjects2);


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
{gdjs.FullSokobanGameCode.GDLeftKeyObjects2_1final.length = 0;
let isConditionTrue_1 = false;
isConditionTrue_0 = false;
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "a");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDLeftKeyObjects1, gdjs.FullSokobanGameCode.GDLeftKeyObjects3);

for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDLeftKeyObjects3.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDLeftKeyObjects3[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDLeftKeyObjects3[k] = gdjs.FullSokobanGameCode.GDLeftKeyObjects3[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDLeftKeyObjects3.length = k;
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDLeftKeyObjects3.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDLeftKeyObjects2_1final.indexOf(gdjs.FullSokobanGameCode.GDLeftKeyObjects3[j]) === -1 )
            gdjs.FullSokobanGameCode.GDLeftKeyObjects2_1final.push(gdjs.FullSokobanGameCode.GDLeftKeyObjects3[j]);
    }
}
}
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Left");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDLeftKeyObjects2_1final, gdjs.FullSokobanGameCode.GDLeftKeyObjects2);
}
}
if (isConditionTrue_0) {
isConditionTrue_0 = false;
{isConditionTrue_0 = runtimeScene.getScene().getVariables().getFromIndex(2).getAsBoolean();
}
}
if (isConditionTrue_0) {
{runtimeScene.getScene().getVariables().getFromIndex(0).setNumber(-(64));
}{runtimeScene.getScene().getVariables().getFromIndex(2).setBoolean(false);
}}

}


{

gdjs.copyArray(gdjs.FullSokobanGameCode.GDDownKeyObjects1, gdjs.FullSokobanGameCode.GDDownKeyObjects2);


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
{gdjs.FullSokobanGameCode.GDDownKeyObjects2_1final.length = 0;
let isConditionTrue_1 = false;
isConditionTrue_0 = false;
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "s");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDDownKeyObjects1, gdjs.FullSokobanGameCode.GDDownKeyObjects3);

for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDDownKeyObjects3.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDDownKeyObjects3[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDDownKeyObjects3[k] = gdjs.FullSokobanGameCode.GDDownKeyObjects3[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDDownKeyObjects3.length = k;
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDDownKeyObjects3.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDDownKeyObjects2_1final.indexOf(gdjs.FullSokobanGameCode.GDDownKeyObjects3[j]) === -1 )
            gdjs.FullSokobanGameCode.GDDownKeyObjects2_1final.push(gdjs.FullSokobanGameCode.GDDownKeyObjects3[j]);
    }
}
}
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Down");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDDownKeyObjects2_1final, gdjs.FullSokobanGameCode.GDDownKeyObjects2);
}
}
if (isConditionTrue_0) {
isConditionTrue_0 = false;
{isConditionTrue_0 = runtimeScene.getScene().getVariables().getFromIndex(2).getAsBoolean();
}
}
if (isConditionTrue_0) {
{runtimeScene.getScene().getVariables().getFromIndex(1).setNumber(64);
}{runtimeScene.getScene().getVariables().getFromIndex(2).setBoolean(false);
}}

}


{

gdjs.copyArray(gdjs.FullSokobanGameCode.GDUpKeyObjects1, gdjs.FullSokobanGameCode.GDUpKeyObjects2);


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
{gdjs.FullSokobanGameCode.GDUpKeyObjects2_1final.length = 0;
let isConditionTrue_1 = false;
isConditionTrue_0 = false;
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "w");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDUpKeyObjects1, gdjs.FullSokobanGameCode.GDUpKeyObjects3);

for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDUpKeyObjects3.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDUpKeyObjects3[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDUpKeyObjects3[k] = gdjs.FullSokobanGameCode.GDUpKeyObjects3[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDUpKeyObjects3.length = k;
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDUpKeyObjects3.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDUpKeyObjects2_1final.indexOf(gdjs.FullSokobanGameCode.GDUpKeyObjects3[j]) === -1 )
            gdjs.FullSokobanGameCode.GDUpKeyObjects2_1final.push(gdjs.FullSokobanGameCode.GDUpKeyObjects3[j]);
    }
}
}
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Up");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDUpKeyObjects2_1final, gdjs.FullSokobanGameCode.GDUpKeyObjects2);
}
}
if (isConditionTrue_0) {
isConditionTrue_0 = false;
{isConditionTrue_0 = runtimeScene.getScene().getVariables().getFromIndex(2).getAsBoolean();
}
}
if (isConditionTrue_0) {
{runtimeScene.getScene().getVariables().getFromIndex(1).setNumber(-(64));
}{runtimeScene.getScene().getVariables().getFromIndex(2).setBoolean(false);
}}

}


{

/* Reuse gdjs.FullSokobanGameCode.GDRightKeyObjects1 */

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
{gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final.length = 0;
let isConditionTrue_1 = false;
isConditionTrue_0 = false;
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "d");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDRightKeyObjects1, gdjs.FullSokobanGameCode.GDRightKeyObjects2);

for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDRightKeyObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDRightKeyObjects2[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDRightKeyObjects2[k] = gdjs.FullSokobanGameCode.GDRightKeyObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDRightKeyObjects2.length = k;
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDRightKeyObjects2.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final.indexOf(gdjs.FullSokobanGameCode.GDRightKeyObjects2[j]) === -1 )
            gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final.push(gdjs.FullSokobanGameCode.GDRightKeyObjects2[j]);
    }
}
}
{
isConditionTrue_1 = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Right");
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final, gdjs.FullSokobanGameCode.GDRightKeyObjects1);
}
}
if (isConditionTrue_0) {
isConditionTrue_0 = false;
{isConditionTrue_0 = runtimeScene.getScene().getVariables().getFromIndex(2).getAsBoolean();
}
}
if (isConditionTrue_0) {
{runtimeScene.getScene().getVariables().getFromIndex(0).setNumber(64);
}{runtimeScene.getScene().getVariables().getFromIndex(2).setBoolean(false);
}}

}


};gdjs.FullSokobanGameCode.eventsList4 = function(runtimeScene) {

{



}


{

gdjs.FullSokobanGameCode.GDDownKeyObjects1.length = 0;

gdjs.FullSokobanGameCode.GDLeftKeyObjects1.length = 0;

gdjs.FullSokobanGameCode.GDRightKeyObjects1.length = 0;

gdjs.FullSokobanGameCode.GDUpKeyObjects1.length = 0;


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
{gdjs.FullSokobanGameCode.GDDownKeyObjects1_1final.length = 0;
gdjs.FullSokobanGameCode.GDLeftKeyObjects1_1final.length = 0;
gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final.length = 0;
gdjs.FullSokobanGameCode.GDUpKeyObjects1_1final.length = 0;
let isConditionTrue_1 = false;
isConditionTrue_0 = false;
{
isConditionTrue_1 = gdjs.evtTools.input.anyKeyPressed(runtimeScene);
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
gdjs.copyArray(runtimeScene.getObjects("DownKey"), gdjs.FullSokobanGameCode.GDDownKeyObjects2);
gdjs.copyArray(runtimeScene.getObjects("LeftKey"), gdjs.FullSokobanGameCode.GDLeftKeyObjects2);
gdjs.copyArray(runtimeScene.getObjects("RightKey"), gdjs.FullSokobanGameCode.GDRightKeyObjects2);
gdjs.copyArray(runtimeScene.getObjects("UpKey"), gdjs.FullSokobanGameCode.GDUpKeyObjects2);
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDUpKeyObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDUpKeyObjects2[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDUpKeyObjects2[k] = gdjs.FullSokobanGameCode.GDUpKeyObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDUpKeyObjects2.length = k;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDRightKeyObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDRightKeyObjects2[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDRightKeyObjects2[k] = gdjs.FullSokobanGameCode.GDRightKeyObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDRightKeyObjects2.length = k;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDLeftKeyObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDLeftKeyObjects2[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDLeftKeyObjects2[k] = gdjs.FullSokobanGameCode.GDLeftKeyObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDLeftKeyObjects2.length = k;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDDownKeyObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDDownKeyObjects2[i].IsPressed((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_1 = true;
        gdjs.FullSokobanGameCode.GDDownKeyObjects2[k] = gdjs.FullSokobanGameCode.GDDownKeyObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDDownKeyObjects2.length = k;
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDDownKeyObjects2.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDDownKeyObjects1_1final.indexOf(gdjs.FullSokobanGameCode.GDDownKeyObjects2[j]) === -1 )
            gdjs.FullSokobanGameCode.GDDownKeyObjects1_1final.push(gdjs.FullSokobanGameCode.GDDownKeyObjects2[j]);
    }
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDLeftKeyObjects2.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDLeftKeyObjects1_1final.indexOf(gdjs.FullSokobanGameCode.GDLeftKeyObjects2[j]) === -1 )
            gdjs.FullSokobanGameCode.GDLeftKeyObjects1_1final.push(gdjs.FullSokobanGameCode.GDLeftKeyObjects2[j]);
    }
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDRightKeyObjects2.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final.indexOf(gdjs.FullSokobanGameCode.GDRightKeyObjects2[j]) === -1 )
            gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final.push(gdjs.FullSokobanGameCode.GDRightKeyObjects2[j]);
    }
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDUpKeyObjects2.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDUpKeyObjects1_1final.indexOf(gdjs.FullSokobanGameCode.GDUpKeyObjects2[j]) === -1 )
            gdjs.FullSokobanGameCode.GDUpKeyObjects1_1final.push(gdjs.FullSokobanGameCode.GDUpKeyObjects2[j]);
    }
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDDownKeyObjects1_1final, gdjs.FullSokobanGameCode.GDDownKeyObjects1);
gdjs.copyArray(gdjs.FullSokobanGameCode.GDLeftKeyObjects1_1final, gdjs.FullSokobanGameCode.GDLeftKeyObjects1);
gdjs.copyArray(gdjs.FullSokobanGameCode.GDRightKeyObjects1_1final, gdjs.FullSokobanGameCode.GDRightKeyObjects1);
gdjs.copyArray(gdjs.FullSokobanGameCode.GDUpKeyObjects1_1final, gdjs.FullSokobanGameCode.GDUpKeyObjects1);
}
}
if (isConditionTrue_0) {
isConditionTrue_0 = false;
{isConditionTrue_0 = runtimeScene.getOnceTriggers().triggerOnce(11210900);
}
}
if (isConditionTrue_0) {
{runtimeScene.getScene().getVariables().getFromIndex(2).setBoolean(true);
}
{ //Subevents
gdjs.FullSokobanGameCode.eventsList3(runtimeScene);} //End of subevents
}

}


};gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects2Objects = Hashtable.newFrom({"Marker": gdjs.FullSokobanGameCode.GDMarkerObjects2});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects3Objects = Hashtable.newFrom({"Marker": gdjs.FullSokobanGameCode.GDMarkerObjects3});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects3ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects3Objects = Hashtable.newFrom({"Box": gdjs.FullSokobanGameCode.GDBoxObjects3, "Player": gdjs.FullSokobanGameCode.GDPlayerObjects3});
gdjs.FullSokobanGameCode.eventsList5 = function(runtimeScene) {

};gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects3Objects = Hashtable.newFrom({"Marker": gdjs.FullSokobanGameCode.GDMarkerObjects3});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDTilemap_95959595ObstaclesObjects3Objects = Hashtable.newFrom({"Tilemap_Obstacles": gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects3Objects = Hashtable.newFrom({"Marker": gdjs.FullSokobanGameCode.GDMarkerObjects3});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects3Objects = Hashtable.newFrom({"Goal": gdjs.FullSokobanGameCode.GDGoalObjects3});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects2ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects2Objects = Hashtable.newFrom({"Box": gdjs.FullSokobanGameCode.GDBoxObjects2, "Player": gdjs.FullSokobanGameCode.GDPlayerObjects2});
gdjs.FullSokobanGameCode.eventsList6 = function(runtimeScene) {

{

gdjs.copyArray(runtimeScene.getObjects("Box"), gdjs.FullSokobanGameCode.GDBoxObjects2);
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.FullSokobanGameCode.GDPlayerObjects2);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.object.pickAllObjects((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects2ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects2Objects);
if (isConditionTrue_0) {
/* Reuse gdjs.FullSokobanGameCode.GDBoxObjects2 */
/* Reuse gdjs.FullSokobanGameCode.GDPlayerObjects2 */
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDBoxObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDBoxObjects2[i].returnVariable(gdjs.FullSokobanGameCode.GDBoxObjects2[i].getVariables().get("Direction")).setString("None");
}
for(var i = 0, len = gdjs.FullSokobanGameCode.GDPlayerObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDPlayerObjects2[i].returnVariable(gdjs.FullSokobanGameCode.GDPlayerObjects2[i].getVariables().get("Direction")).setString("None");
}
}}

}


};gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects2Objects = Hashtable.newFrom({"Marker": gdjs.FullSokobanGameCode.GDMarkerObjects2});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects2ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects2Objects = Hashtable.newFrom({"Box": gdjs.FullSokobanGameCode.GDBoxObjects2, "Player": gdjs.FullSokobanGameCode.GDPlayerObjects2});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects2ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects2Objects = Hashtable.newFrom({"Box": gdjs.FullSokobanGameCode.GDBoxObjects2, "Player": gdjs.FullSokobanGameCode.GDPlayerObjects2});
gdjs.FullSokobanGameCode.eventsList7 = function(runtimeScene) {

{

/* Reuse gdjs.FullSokobanGameCode.GDBoxObjects2 */
/* Reuse gdjs.FullSokobanGameCode.GDPlayerObjects2 */

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.object.pickAllObjects((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects2ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects2Objects);
if (isConditionTrue_0) {
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDBoxObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDBoxObjects2[i].getVariableString(gdjs.FullSokobanGameCode.GDBoxObjects2[i].getVariables().get("Direction")) == "Move" ) {
        isConditionTrue_0 = true;
        gdjs.FullSokobanGameCode.GDBoxObjects2[k] = gdjs.FullSokobanGameCode.GDBoxObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDBoxObjects2.length = k;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDPlayerObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDPlayerObjects2[i].getVariableString(gdjs.FullSokobanGameCode.GDPlayerObjects2[i].getVariables().get("Direction")) == "Move" ) {
        isConditionTrue_0 = true;
        gdjs.FullSokobanGameCode.GDPlayerObjects2[k] = gdjs.FullSokobanGameCode.GDPlayerObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDPlayerObjects2.length = k;
}
if (isConditionTrue_0) {
/* Reuse gdjs.FullSokobanGameCode.GDBoxObjects2 */
/* Reuse gdjs.FullSokobanGameCode.GDPlayerObjects2 */
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDBoxObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDBoxObjects2[i].setPosition((gdjs.FullSokobanGameCode.GDBoxObjects2[i].getPointX("")) + gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(0)),(gdjs.FullSokobanGameCode.GDBoxObjects2[i].getPointY("")) + gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(1)));
}
for(var i = 0, len = gdjs.FullSokobanGameCode.GDPlayerObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDPlayerObjects2[i].setPosition((gdjs.FullSokobanGameCode.GDPlayerObjects2[i].getPointX("")) + gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(0)),(gdjs.FullSokobanGameCode.GDPlayerObjects2[i].getPointY("")) + gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(1)));
}
}{for(var i = 0, len = gdjs.FullSokobanGameCode.GDBoxObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDBoxObjects2[i].returnVariable(gdjs.FullSokobanGameCode.GDBoxObjects2[i].getVariables().get("Direction")).setString("None");
}
for(var i = 0, len = gdjs.FullSokobanGameCode.GDPlayerObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDPlayerObjects2[i].returnVariable(gdjs.FullSokobanGameCode.GDPlayerObjects2[i].getVariables().get("Direction")).setString("None");
}
}}

}


};gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects1Objects = Hashtable.newFrom({"Box": gdjs.FullSokobanGameCode.GDBoxObjects1});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects1Objects = Hashtable.newFrom({"Goal": gdjs.FullSokobanGameCode.GDGoalObjects1});
gdjs.FullSokobanGameCode.eventsList8 = function(runtimeScene) {

{



}


{


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
{let isConditionTrue_1 = false;
isConditionTrue_0 = false;
{
{isConditionTrue_1 = (runtimeScene.getScene().getVariables().getFromIndex(0).getAsNumber() != 0);
}
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
{isConditionTrue_1 = (runtimeScene.getScene().getVariables().getFromIndex(1).getAsNumber() != 0);
}
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
}
}
{
}
}
if (isConditionTrue_0) {
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.FullSokobanGameCode.GDPlayerObjects2);
gdjs.FullSokobanGameCode.GDMarkerObjects2.length = 0;

{gdjs.evtTools.object.createObjectOnScene((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects2Objects, (( gdjs.FullSokobanGameCode.GDPlayerObjects2.length === 0 ) ? 0 :gdjs.FullSokobanGameCode.GDPlayerObjects2[0].getPointX("")), (( gdjs.FullSokobanGameCode.GDPlayerObjects2.length === 0 ) ? 0 :gdjs.FullSokobanGameCode.GDPlayerObjects2[0].getPointY("")), "");
}}

}


{


let stopDoWhile_0 = false;
do {
gdjs.copyArray(runtimeScene.getObjects("Box"), gdjs.FullSokobanGameCode.GDBoxObjects3);
gdjs.copyArray(runtimeScene.getObjects("Marker"), gdjs.FullSokobanGameCode.GDMarkerObjects3);
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.FullSokobanGameCode.GDPlayerObjects3);
let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects3Objects, gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects3ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects3Objects, false, runtimeScene, false);
if (isConditionTrue_0) {
let isConditionTrue_0 = false;
if (true) {
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDBoxObjects3.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDBoxObjects3[i].returnVariable(gdjs.FullSokobanGameCode.GDBoxObjects3[i].getVariables().get("Direction")).setString("Move");
}
for(var i = 0, len = gdjs.FullSokobanGameCode.GDPlayerObjects3.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDPlayerObjects3[i].returnVariable(gdjs.FullSokobanGameCode.GDPlayerObjects3[i].getVariables().get("Direction")).setString("Move");
}
}{for(var i = 0, len = gdjs.FullSokobanGameCode.GDMarkerObjects3.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDMarkerObjects3[i].setPosition((( gdjs.FullSokobanGameCode.GDPlayerObjects3.length === 0 ) ? (( gdjs.FullSokobanGameCode.GDBoxObjects3.length === 0 ) ? 0 :gdjs.FullSokobanGameCode.GDBoxObjects3[0].getPointX("")) :gdjs.FullSokobanGameCode.GDPlayerObjects3[0].getPointX("")) + gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(0)),(( gdjs.FullSokobanGameCode.GDPlayerObjects3.length === 0 ) ? (( gdjs.FullSokobanGameCode.GDBoxObjects3.length === 0 ) ? 0 :gdjs.FullSokobanGameCode.GDBoxObjects3[0].getPointY("")) :gdjs.FullSokobanGameCode.GDPlayerObjects3[0].getPointY("")) + gdjs.evtTools.variable.getVariableNumber(runtimeScene.getScene().getVariables().getFromIndex(1)));
}
}
{ //Subevents: 
gdjs.FullSokobanGameCode.eventsList5(runtimeScene);} //Subevents end.
}
} else stopDoWhile_0 = true; 
} while (!stopDoWhile_0);

}


{



}


{

gdjs.FullSokobanGameCode.GDGoalObjects2.length = 0;

gdjs.FullSokobanGameCode.GDMarkerObjects2.length = 0;

gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2.length = 0;


let isConditionTrue_0 = false;
isConditionTrue_0 = false;
{gdjs.FullSokobanGameCode.GDGoalObjects2_1final.length = 0;
gdjs.FullSokobanGameCode.GDMarkerObjects2_1final.length = 0;
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2_1final.length = 0;
let isConditionTrue_1 = false;
isConditionTrue_0 = false;
{
gdjs.copyArray(runtimeScene.getObjects("Marker"), gdjs.FullSokobanGameCode.GDMarkerObjects3);
gdjs.copyArray(runtimeScene.getObjects("Tilemap_Obstacles"), gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3);
isConditionTrue_1 = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects3Objects, gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDTilemap_95959595ObstaclesObjects3Objects, false, runtimeScene, false);
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDMarkerObjects3.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDMarkerObjects2_1final.indexOf(gdjs.FullSokobanGameCode.GDMarkerObjects3[j]) === -1 )
            gdjs.FullSokobanGameCode.GDMarkerObjects2_1final.push(gdjs.FullSokobanGameCode.GDMarkerObjects3[j]);
    }
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2_1final.indexOf(gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3[j]) === -1 )
            gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2_1final.push(gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3[j]);
    }
}
}
{
gdjs.copyArray(runtimeScene.getObjects("Goal"), gdjs.FullSokobanGameCode.GDGoalObjects3);
gdjs.copyArray(runtimeScene.getObjects("Marker"), gdjs.FullSokobanGameCode.GDMarkerObjects3);
{let isConditionTrue_2 = false;
isConditionTrue_2 = false;
isConditionTrue_2 = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects3Objects, gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects3Objects, false, runtimeScene, false);
if (isConditionTrue_2) {
isConditionTrue_2 = false;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDGoalObjects3.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDGoalObjects3[i].getBehavior("Animation").getAnimationName() == "Filled" ) {
        isConditionTrue_2 = true;
        gdjs.FullSokobanGameCode.GDGoalObjects3[k] = gdjs.FullSokobanGameCode.GDGoalObjects3[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDGoalObjects3.length = k;
}
isConditionTrue_1 = isConditionTrue_2;
}
if(isConditionTrue_1) {
    isConditionTrue_0 = true;
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDGoalObjects3.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDGoalObjects2_1final.indexOf(gdjs.FullSokobanGameCode.GDGoalObjects3[j]) === -1 )
            gdjs.FullSokobanGameCode.GDGoalObjects2_1final.push(gdjs.FullSokobanGameCode.GDGoalObjects3[j]);
    }
    for (let j = 0, jLen = gdjs.FullSokobanGameCode.GDMarkerObjects3.length; j < jLen ; ++j) {
        if ( gdjs.FullSokobanGameCode.GDMarkerObjects2_1final.indexOf(gdjs.FullSokobanGameCode.GDMarkerObjects3[j]) === -1 )
            gdjs.FullSokobanGameCode.GDMarkerObjects2_1final.push(gdjs.FullSokobanGameCode.GDMarkerObjects3[j]);
    }
}
}
{
gdjs.copyArray(gdjs.FullSokobanGameCode.GDGoalObjects2_1final, gdjs.FullSokobanGameCode.GDGoalObjects2);
gdjs.copyArray(gdjs.FullSokobanGameCode.GDMarkerObjects2_1final, gdjs.FullSokobanGameCode.GDMarkerObjects2);
gdjs.copyArray(gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2_1final, gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2);
}
}
if (isConditionTrue_0) {
/* Reuse gdjs.FullSokobanGameCode.GDMarkerObjects2 */
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDMarkerObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDMarkerObjects2[i].deleteFromScene(runtimeScene);
}
}
{ //Subevents
gdjs.FullSokobanGameCode.eventsList6(runtimeScene);} //End of subevents
}

}


{

gdjs.copyArray(runtimeScene.getObjects("Box"), gdjs.FullSokobanGameCode.GDBoxObjects2);
gdjs.copyArray(runtimeScene.getObjects("Marker"), gdjs.FullSokobanGameCode.GDMarkerObjects2);
gdjs.copyArray(runtimeScene.getObjects("Player"), gdjs.FullSokobanGameCode.GDPlayerObjects2);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDMarkerObjects2Objects, gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects2ObjectsGDgdjs_9546FullSokobanGameCode_9546GDPlayerObjects2Objects, true, runtimeScene, false);
if (isConditionTrue_0) {
/* Reuse gdjs.FullSokobanGameCode.GDMarkerObjects2 */
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDMarkerObjects2.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDMarkerObjects2[i].deleteFromScene(runtimeScene);
}
}
{ //Subevents
gdjs.FullSokobanGameCode.eventsList7(runtimeScene);} //End of subevents
}

}


{

gdjs.copyArray(runtimeScene.getObjects("Box"), gdjs.FullSokobanGameCode.GDBoxObjects1);
gdjs.copyArray(runtimeScene.getObjects("Goal"), gdjs.FullSokobanGameCode.GDGoalObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDBoxObjects1Objects, gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects1Objects, false, runtimeScene, true);
if (isConditionTrue_0) {
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDGoalObjects1.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDGoalObjects1[i].getBehavior("Animation").getAnimationName() == "Empty" ) {
        isConditionTrue_0 = true;
        gdjs.FullSokobanGameCode.GDGoalObjects1[k] = gdjs.FullSokobanGameCode.GDGoalObjects1[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDGoalObjects1.length = k;
}
if (isConditionTrue_0) {
/* Reuse gdjs.FullSokobanGameCode.GDBoxObjects1 */
/* Reuse gdjs.FullSokobanGameCode.GDGoalObjects1 */
{for(var i = 0, len = gdjs.FullSokobanGameCode.GDBoxObjects1.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDBoxObjects1[i].deleteFromScene(runtimeScene);
}
}{for(var i = 0, len = gdjs.FullSokobanGameCode.GDGoalObjects1.length ;i < len;++i) {
    gdjs.FullSokobanGameCode.GDGoalObjects1[i].getBehavior("Animation").setAnimationName("Filled");
}
}{gdjs.evtTools.sound.playSound(runtimeScene, "apple-pay-sound.mp3", false, 100, 1);
}}

}


};gdjs.FullSokobanGameCode.eventsList9 = function(runtimeScene) {

{



}


{

gdjs.copyArray(runtimeScene.getObjects("ResetGameButton"), gdjs.FullSokobanGameCode.GDResetGameButtonObjects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDResetGameButtonObjects1.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDResetGameButtonObjects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.FullSokobanGameCode.GDResetGameButtonObjects1[k] = gdjs.FullSokobanGameCode.GDResetGameButtonObjects1[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDResetGameButtonObjects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, gdjs.evtTools.runtimeScene.getSceneName(runtimeScene), false);
}}

}


};gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects2Objects = Hashtable.newFrom({"Goal": gdjs.FullSokobanGameCode.GDGoalObjects2});
gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects2Objects = Hashtable.newFrom({"Goal": gdjs.FullSokobanGameCode.GDGoalObjects2});
gdjs.FullSokobanGameCode.eventsList10 = function(runtimeScene) {

{



}


{

gdjs.copyArray(runtimeScene.getObjects("Goal"), gdjs.FullSokobanGameCode.GDGoalObjects2);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
isConditionTrue_0 = !(gdjs.evtTools.camera.layerIsVisible(runtimeScene, "WinGame"));
if (isConditionTrue_0) {
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDGoalObjects2.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDGoalObjects2[i].getBehavior("Animation").getAnimationName() == "Filled" ) {
        isConditionTrue_0 = true;
        gdjs.FullSokobanGameCode.GDGoalObjects2[k] = gdjs.FullSokobanGameCode.GDGoalObjects2[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDGoalObjects2.length = k;
if (isConditionTrue_0) {
isConditionTrue_0 = false;
{isConditionTrue_0 = (gdjs.evtTools.object.getSceneInstancesCount((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects2Objects) == gdjs.evtTools.object.getPickedInstancesCount(gdjs.FullSokobanGameCode.mapOfGDgdjs_9546FullSokobanGameCode_9546GDGoalObjects2Objects));
}
}
}
if (isConditionTrue_0) {
{gdjs.evtTools.camera.showLayer(runtimeScene, "WinGame");
}{gdjs.evtTools.runtimeScene.pauseTimer(runtimeScene, "timer");
}{gdjs.evtTools.sound.playSound(runtimeScene, "yippeeeeeeeeeeeeee.mp3", false, 100, 1);
}}

}


{

gdjs.copyArray(runtimeScene.getObjects("next_level2"), gdjs.FullSokobanGameCode.GDnext_9595level2Objects1);

let isConditionTrue_0 = false;
isConditionTrue_0 = false;
for (var i = 0, k = 0, l = gdjs.FullSokobanGameCode.GDnext_9595level2Objects1.length;i<l;++i) {
    if ( gdjs.FullSokobanGameCode.GDnext_9595level2Objects1[i].IsClicked((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : undefined)) ) {
        isConditionTrue_0 = true;
        gdjs.FullSokobanGameCode.GDnext_9595level2Objects1[k] = gdjs.FullSokobanGameCode.GDnext_9595level2Objects1[i];
        ++k;
    }
}
gdjs.FullSokobanGameCode.GDnext_9595level2Objects1.length = k;
if (isConditionTrue_0) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "FullSokobanGame2", false);
}}

}


};gdjs.FullSokobanGameCode.eventsList11 = function(runtimeScene) {

{


gdjs.FullSokobanGameCode.eventsList0(runtimeScene);
}


{


gdjs.FullSokobanGameCode.eventsList1(runtimeScene);
}


{


gdjs.FullSokobanGameCode.eventsList2(runtimeScene);
}


{


gdjs.FullSokobanGameCode.eventsList4(runtimeScene);
}


{


gdjs.FullSokobanGameCode.eventsList8(runtimeScene);
}


{



}


{


let isConditionTrue_0 = false;
{
{runtimeScene.getScene().getVariables().getFromIndex(1).setNumber(0);
}{runtimeScene.getScene().getVariables().getFromIndex(0).setNumber(0);
}}

}


{


gdjs.FullSokobanGameCode.eventsList9(runtimeScene);
}


{


gdjs.FullSokobanGameCode.eventsList10(runtimeScene);
}


};

gdjs.FullSokobanGameCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.FullSokobanGameCode.GDPlayerObjects1.length = 0;
gdjs.FullSokobanGameCode.GDPlayerObjects2.length = 0;
gdjs.FullSokobanGameCode.GDPlayerObjects3.length = 0;
gdjs.FullSokobanGameCode.GDBoxObjects1.length = 0;
gdjs.FullSokobanGameCode.GDBoxObjects2.length = 0;
gdjs.FullSokobanGameCode.GDBoxObjects3.length = 0;
gdjs.FullSokobanGameCode.GDMarkerObjects1.length = 0;
gdjs.FullSokobanGameCode.GDMarkerObjects2.length = 0;
gdjs.FullSokobanGameCode.GDMarkerObjects3.length = 0;
gdjs.FullSokobanGameCode.GDFloorObjects1.length = 0;
gdjs.FullSokobanGameCode.GDFloorObjects2.length = 0;
gdjs.FullSokobanGameCode.GDFloorObjects3.length = 0;
gdjs.FullSokobanGameCode.GDGoalObjects1.length = 0;
gdjs.FullSokobanGameCode.GDGoalObjects2.length = 0;
gdjs.FullSokobanGameCode.GDGoalObjects3.length = 0;
gdjs.FullSokobanGameCode.GDResetGameButtonObjects1.length = 0;
gdjs.FullSokobanGameCode.GDResetGameButtonObjects2.length = 0;
gdjs.FullSokobanGameCode.GDResetGameButtonObjects3.length = 0;
gdjs.FullSokobanGameCode.GDYouWinObjects1.length = 0;
gdjs.FullSokobanGameCode.GDYouWinObjects2.length = 0;
gdjs.FullSokobanGameCode.GDYouWinObjects3.length = 0;
gdjs.FullSokobanGameCode.GDUpKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDUpKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDUpKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDRightKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDRightKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDRightKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDLeftKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDLeftKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDLeftKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDDownKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDDownKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDDownKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects1.length = 0;
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2.length = 0;
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3.length = 0;
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects1.length = 0;
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects2.length = 0;
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects3.length = 0;
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects1.length = 0;
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects2.length = 0;
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects3.length = 0;
gdjs.FullSokobanGameCode.GDtimerObjects1.length = 0;
gdjs.FullSokobanGameCode.GDtimerObjects2.length = 0;
gdjs.FullSokobanGameCode.GDtimerObjects3.length = 0;
gdjs.FullSokobanGameCode.GDNewSpriteObjects1.length = 0;
gdjs.FullSokobanGameCode.GDNewSpriteObjects2.length = 0;
gdjs.FullSokobanGameCode.GDNewSpriteObjects3.length = 0;
gdjs.FullSokobanGameCode.GDplayObjects1.length = 0;
gdjs.FullSokobanGameCode.GDplayObjects2.length = 0;
gdjs.FullSokobanGameCode.GDplayObjects3.length = 0;
gdjs.FullSokobanGameCode.GDnext_9595level2Objects1.length = 0;
gdjs.FullSokobanGameCode.GDnext_9595level2Objects2.length = 0;
gdjs.FullSokobanGameCode.GDnext_9595level2Objects3.length = 0;
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects1.length = 0;
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects2.length = 0;
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects3.length = 0;
gdjs.FullSokobanGameCode.GDLevelObjects1.length = 0;
gdjs.FullSokobanGameCode.GDLevelObjects2.length = 0;
gdjs.FullSokobanGameCode.GDLevelObjects3.length = 0;
gdjs.FullSokobanGameCode.GDpetunjukObjects1.length = 0;
gdjs.FullSokobanGameCode.GDpetunjukObjects2.length = 0;
gdjs.FullSokobanGameCode.GDpetunjukObjects3.length = 0;

gdjs.FullSokobanGameCode.eventsList11(runtimeScene);
gdjs.FullSokobanGameCode.GDPlayerObjects1.length = 0;
gdjs.FullSokobanGameCode.GDPlayerObjects2.length = 0;
gdjs.FullSokobanGameCode.GDPlayerObjects3.length = 0;
gdjs.FullSokobanGameCode.GDBoxObjects1.length = 0;
gdjs.FullSokobanGameCode.GDBoxObjects2.length = 0;
gdjs.FullSokobanGameCode.GDBoxObjects3.length = 0;
gdjs.FullSokobanGameCode.GDMarkerObjects1.length = 0;
gdjs.FullSokobanGameCode.GDMarkerObjects2.length = 0;
gdjs.FullSokobanGameCode.GDMarkerObjects3.length = 0;
gdjs.FullSokobanGameCode.GDFloorObjects1.length = 0;
gdjs.FullSokobanGameCode.GDFloorObjects2.length = 0;
gdjs.FullSokobanGameCode.GDFloorObjects3.length = 0;
gdjs.FullSokobanGameCode.GDGoalObjects1.length = 0;
gdjs.FullSokobanGameCode.GDGoalObjects2.length = 0;
gdjs.FullSokobanGameCode.GDGoalObjects3.length = 0;
gdjs.FullSokobanGameCode.GDResetGameButtonObjects1.length = 0;
gdjs.FullSokobanGameCode.GDResetGameButtonObjects2.length = 0;
gdjs.FullSokobanGameCode.GDResetGameButtonObjects3.length = 0;
gdjs.FullSokobanGameCode.GDYouWinObjects1.length = 0;
gdjs.FullSokobanGameCode.GDYouWinObjects2.length = 0;
gdjs.FullSokobanGameCode.GDYouWinObjects3.length = 0;
gdjs.FullSokobanGameCode.GDUpKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDUpKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDUpKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDRightKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDRightKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDRightKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDLeftKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDLeftKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDLeftKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDDownKeyObjects1.length = 0;
gdjs.FullSokobanGameCode.GDDownKeyObjects2.length = 0;
gdjs.FullSokobanGameCode.GDDownKeyObjects3.length = 0;
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects1.length = 0;
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects2.length = 0;
gdjs.FullSokobanGameCode.GDTilemap_9595ObstaclesObjects3.length = 0;
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects1.length = 0;
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects2.length = 0;
gdjs.FullSokobanGameCode.GDbg_9595how_9595to_9595playObjects3.length = 0;
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects1.length = 0;
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects2.length = 0;
gdjs.FullSokobanGameCode.GDhow_9595to_9595playObjects3.length = 0;
gdjs.FullSokobanGameCode.GDtimerObjects1.length = 0;
gdjs.FullSokobanGameCode.GDtimerObjects2.length = 0;
gdjs.FullSokobanGameCode.GDtimerObjects3.length = 0;
gdjs.FullSokobanGameCode.GDNewSpriteObjects1.length = 0;
gdjs.FullSokobanGameCode.GDNewSpriteObjects2.length = 0;
gdjs.FullSokobanGameCode.GDNewSpriteObjects3.length = 0;
gdjs.FullSokobanGameCode.GDplayObjects1.length = 0;
gdjs.FullSokobanGameCode.GDplayObjects2.length = 0;
gdjs.FullSokobanGameCode.GDplayObjects3.length = 0;
gdjs.FullSokobanGameCode.GDnext_9595level2Objects1.length = 0;
gdjs.FullSokobanGameCode.GDnext_9595level2Objects2.length = 0;
gdjs.FullSokobanGameCode.GDnext_9595level2Objects3.length = 0;
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects1.length = 0;
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects2.length = 0;
gdjs.FullSokobanGameCode.GDRpgUrbanMap16x16Objects3.length = 0;
gdjs.FullSokobanGameCode.GDLevelObjects1.length = 0;
gdjs.FullSokobanGameCode.GDLevelObjects2.length = 0;
gdjs.FullSokobanGameCode.GDLevelObjects3.length = 0;
gdjs.FullSokobanGameCode.GDpetunjukObjects1.length = 0;
gdjs.FullSokobanGameCode.GDpetunjukObjects2.length = 0;
gdjs.FullSokobanGameCode.GDpetunjukObjects3.length = 0;


return;

}

gdjs['FullSokobanGameCode'] = gdjs.FullSokobanGameCode;

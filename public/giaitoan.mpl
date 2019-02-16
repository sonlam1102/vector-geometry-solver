restart; libname := libname, currentdir();
march('open', "SolveVectoLib.mla"):
with(SolveVectoLib);
url := currentdir();
Url(url);
Init();
Reset_Onet();
ReadExer(cat(url, "/ex.txt"));
params := Params;
kindEx := Kind_Ex;
objects := objects;
objectTypes := obj_Types;
Objects := Objects;
ObjectTypes := Obj_Types;
oAttr := OAttrs;
oAttrTypes := OAttr_Types;
facts := Facts; factKinds := Fact_Kinds;
hypos := Hypos;
goals := Goals;
Determine_Goals();


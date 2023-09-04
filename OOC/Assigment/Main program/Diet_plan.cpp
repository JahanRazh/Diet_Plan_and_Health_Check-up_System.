// Diet_plan class

#include <iostream>
#include "Diet_plan.h"


void Diet_plan::setDietPlan(int id, string name, string start, string end)
{
    planId = id;
    planName = name;
    startDay = start;
    endDay = end;
}

void Diet_plan::viewDietPlan()
{
    cout << "Diet Plan ID: " << planId << endl;
    cout << "Diet Plan Name: " << planName << endl;
    cout << "Start Day: " << startDay << endl;
    cout << "End Day: " << endDay << endl;
}


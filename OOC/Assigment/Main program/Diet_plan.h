#pragma once
#include <string>
using namespace std;

class Diet_plan {
   
    private:

        int planId;
        string planName;
        string startDay;
        string endDay;

    public:

        void setDietPlan(int id, string name, string start, string end);
        void viewDietPlan();
};

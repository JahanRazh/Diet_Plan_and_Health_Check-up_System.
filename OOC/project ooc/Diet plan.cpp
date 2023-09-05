#include <iostream>
#include <string>

using namespace std;

class Diet_plan {
private:
    int planId;
    string planName;
    string  startDay;
    string  endDay;

public:
    void setDietPlan(int id, string name, string start, string end);
    void viewDietPlan();
	
};

int main() {
    Diet_plan dietPlan;
    dietPlan.setDietPlan(1, "Weight Loss Plan","2023/06/01","2023/06/30");
    dietPlan.viewDietPlan();
	

    return 0;
}

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

// Report class
#include <iostream>
#include "Report.h"

using namespace std;

void Report::setgeneratereport(int repid, string Retype, string Recm)
{
    Report_id = repid;
    Report_type = Retype;
    Recommendation = Recm;
}

void Report::reportDetails()
{
    cout << "Report ID: " << Report_id << endl;
    cout << "Report Type: " << Report_type << endl;
    cout << "Recommendation: " << Recommendation << endl;
}
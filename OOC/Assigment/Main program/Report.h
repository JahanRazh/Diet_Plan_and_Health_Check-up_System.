#pragma once
#include <string>
using namespace std;

class Report
{
    private:

        int Report_id;
        string Report_type;
        string Recommendation;

    public:

        void setgeneratereport(int repid, string Retype, string Recm);
        void reportDetails();
};

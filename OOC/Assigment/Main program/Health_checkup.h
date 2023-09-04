#pragma once
#include <string>
using namespace std;

class Health_checkup
{
    private:

        int checkup_id;
        string checkup_name;
        string checkup_type;
        string doctorname;
        string date;
        string results;

    public:

        void setHealthCheckup(int id, const string& name, const string& type, const string& doctor, string checkupDate, const string& res);
        void displayHealthCheckup();
};



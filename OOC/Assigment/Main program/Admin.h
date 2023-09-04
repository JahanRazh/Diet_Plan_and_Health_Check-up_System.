#pragma once
#include <string>
using namespace std;

class Admin {

    private:

        string staffID;
        string admin_name;
        string password;


    public:

        void setadmindetails(string sid, string adname, string pwd);
        void addPatient();
        void removePatient();

};

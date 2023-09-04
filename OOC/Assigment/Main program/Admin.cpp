// Admin class
#include <iostream>
#include "Admin.h"



void Admin::setadmindetails(string sid, string adname, string pwd)
{
    staffID = sid;
    admin_name = adname;
    password = pwd;
}

void Admin::addPatient()
{
    // Implement logic to add a patient
    cout << "Patient added successfully!" << endl;
}

void Admin::removePatient()
{
    // Implement logic to remove a patient
    //cout << "Patient removed successfully!" << endl;
}



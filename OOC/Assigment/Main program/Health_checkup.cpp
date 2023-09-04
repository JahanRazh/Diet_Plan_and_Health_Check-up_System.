// Health_checkup class 

#include <iostream>
#include "Health_checkup.h"
using namespace std;

void Health_checkup::setHealthCheckup(int id, const string& name, const string& type, const string& doctor, string checkupDate, const string& res)
{
    checkup_id = id;
    checkup_name = name;
    checkup_type = type;
    doctorname = doctor;
    date = checkupDate;
    results = res;
}

void Health_checkup::displayHealthCheckup()
{
    // Accessing member variables
    cout << "Checkup ID: " << checkup_id << endl;
    cout << "Checkup Name: " << checkup_name << endl;
    cout << "Checkup Type: " << checkup_type << endl;
    cout << "Doctor: " << doctorname << endl;
    cout << "Date: " << date << endl;
    cout << "Results: " << results << endl;
}
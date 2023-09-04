#pragma once
#include <string>
using namespace std;

class Appointment
{
    private:
        
        int Appointmentid;
        string Appointmenttype;

    public:
        
        void setappointment(int appid, string Apptype);
        void viewappointmentDetails();
};


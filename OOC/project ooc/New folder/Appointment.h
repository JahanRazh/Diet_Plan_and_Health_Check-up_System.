#ifndef APPOINTMENT_H
#define APPOINTMENT_H

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

#endif


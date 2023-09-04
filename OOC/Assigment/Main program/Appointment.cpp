#include <iostream>
#include "Appointment.h"
using namespace std;

void Appointment::setappointment(int appid, string Apptype)
{
    Appointmentid = appid;
    Appointmenttype = Apptype;
}

void Appointment::viewappointmentDetails()
{
    cout << "Appointment ID: " << Appointmentid << endl;
    cout << "Appointment Type: " << Appointmenttype << endl;
}

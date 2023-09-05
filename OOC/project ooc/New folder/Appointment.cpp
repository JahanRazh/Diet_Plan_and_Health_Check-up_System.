#include "Appointment.h"
#include <iostream>

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


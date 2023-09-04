#include <iostream>
#include <string>
#include "Manage.h"

// Manage class
void Manage::scheduleAppointment(int MngId, string D, string opt)
{
    // Implement logic to schedule an appointment
    ManageId = MngId;
    Date = D;
    option = opt;
    cout << "Appointment scheduled successfully!" << endl;
}

void Manage::updateAppointment()
{
    // Implement logic to update an appointment
    //cout << "Appointment updated successfully!"<< endl;
}

void Manage::cancelAppointment()
{
    // Implement logic to cancel an appointment
    //cout << "Appointment canceled successfully!" << endl;
}

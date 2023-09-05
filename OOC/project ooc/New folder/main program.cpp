
#include <iostream>

#include "Appointment.h"
using namespace std;

int main()
{
    // Create objects of the classes


    Appointment appointment;
    appointment.setappointment(1, "Checkup");
    appointment.viewappointmentDetails();

    return 0;
}

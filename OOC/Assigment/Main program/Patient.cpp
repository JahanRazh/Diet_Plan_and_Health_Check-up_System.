// Patient class
#include <iostream>
#include "Patient.h"

using namespace std;

int Patient::manageProfile(string newUsername, int newUserId, string newPassword)
{
    cout << "Managing profile for user: " << username << endl;
    // Implement the code to manage the patient's profile here
    // You can provide options to update username, userId, and password
    // For example:

    cout << "Enter new username: ";
    cin >> username;

    cout << "Enter new user ID: ";
    cin >> username;

    cout << "New password: ";
    cin >> password;


    cout << "Profile updated successfully!\n\n";
    return 0;
}

void Patient::viewAppointment()
{
    cout << "Viewing appointments for user: " << username << endl;
    // Implement the code to view the patient's appointments here
    // For example:
    cout << "Here are your upcoming appointments:\n";
    cout << "1. Appointment for Health check-up 1\n";
}

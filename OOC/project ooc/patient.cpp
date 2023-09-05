#include <iostream>
#include <string>

using namespace std;

class Patient
{
private:
    string username;
    int userId;
    string password;

public:
    Patient(string uname, int uid, string pwd);
    void setUserName(string uname);
    void setUserId(int uid);
    void setPassword(string pwd);
    string getUserName();
    int getUserId();
    void manageProfile();
    void viewAppointment();
};


int main()
{
    Patient patient("JohnDoe", 12345, "password");
    patient.manageProfile();
    patient.viewAppointment();

    return 0;
}


Patient::Patient(string uname, int uid, string pwd)
{
    username = uname;
    userId = uid;
    password = pwd;
}

void Patient::setUserName(string uname)
{
    username = uname;
}

void Patient::setUserId(int uid)
{
    userId = uid;
}

void Patient::setPassword(string pwd)
{
    password = pwd;
}

string Patient::getUserName()
{
    return username;
}

int Patient::getUserId()
{
    return userId;
}

void Patient::manageProfile()
{
    cout << "Managing profile for user: " << username << endl;
    // Implement the code to manage the patient's profile here
    // You can provide options to update username, userId, and password
    // For example:
    string newUsername;
    cout << "Enter new username: ";
    cin >> newUsername;
    setUserName(newUsername);

    int newUserId;
    cout << "Enter new user ID: ";
    cin >> newUserId;
    setUserId(newUserId);

    string newPassword;
    cout << "Enter new password: ";
    cin >> newPassword;
    setPassword(newPassword);

    cout << "Profile updated successfully!\n";
}

void Patient::viewAppointment()
{
    cout << "Viewing appointments for user: " << username << endl;
    // Implement the code to view the patient's appointments here
    // For example:
    cout << "Here are your upcoming appointments:\n";
    cout << "1. Appointment fro Health check-up 1\n";

}

#pragma once
#include <string>
using namespace std;

class Patient
{
    private:

        string username;
        int userId;
        string password;

    public:

        int manageProfile(string newUsername, int newUserId, string newPassword);
        void viewAppointment();
};

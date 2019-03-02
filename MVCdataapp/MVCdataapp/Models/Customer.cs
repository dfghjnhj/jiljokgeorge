using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.ComponentModel.DataAnnotations;

namespace MVCdataapp.Models
{
    public class Customer
    {
        public int CustomerID { get; set; }

        [Required(ErrorMessage = "Can't be empty")]
        [DataType(DataType.MultilineText)]
        public string name { get; set; }


        
        [Required(ErrorMessage = "Can't be empty")]
        [DataType(DataType.MultilineText)]
        public string address { get; set; }


       
        [Required(ErrorMessage = "Enter a valid email")]
        [DataType(DataType.EmailAddress)]
        public string EmailAddress { get; set; }

        
        [Required(ErrorMessage = "Enter a valid name")]
        [DataType(DataType.Text)]
        public string username { get; set; }

       
        [Required(ErrorMessage = "Required")]
        [DataType(DataType.Password)]
        public string Password { get; set; }



    }
}
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data.Entity;
using MVCdataapp.Models;

namespace MVCdataapp.DAL
{
    public class CustomerContext : DbContext
    {
        public CustomerContext(): base("mycon")
        {

        }

        public System.Data.Entity.DbSet<MVCdataapp.Models.Customer> Customers { get; set; }
    }
}
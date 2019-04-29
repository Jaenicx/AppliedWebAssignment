using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Playerinfo
{
    #region Esports_players
    public class Esports_players
    {
        #region Member Variables
        protected int _player_id;
        protected string _f_name;
        protected string _l_name;
        protected string _gender;
        protected string _gamer_tag;
        protected string _team_name;
        protected string _proficiency_level;
        protected string _game;
        protected string _image;
        #endregion
        #region Constructors
        public Esports_players() { }
        public Esports_players(string f_name, string l_name, string gender, string gamer_tag, string team_name, string proficiency_level, string game, string image)
        {
            this._f_name=f_name;
            this._l_name=l_name;
            this._gender=gender;
            this._gamer_tag=gamer_tag;
            this._team_name=team_name;
            this._proficiency_level=proficiency_level;
            this._game=game;
            this._image=image;
        }
        #endregion
        #region Public Properties
        public virtual int Player_id
        {
            get {return _player_id;}
            set {_player_id=value;}
        }
        public virtual string F_name
        {
            get {return _f_name;}
            set {_f_name=value;}
        }
        public virtual string L_name
        {
            get {return _l_name;}
            set {_l_name=value;}
        }
        public virtual string Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        public virtual string Gamer_tag
        {
            get {return _gamer_tag;}
            set {_gamer_tag=value;}
        }
        public virtual string Team_name
        {
            get {return _team_name;}
            set {_team_name=value;}
        }
        public virtual string Proficiency_level
        {
            get {return _proficiency_level;}
            set {_proficiency_level=value;}
        }
        public virtual string Game
        {
            get {return _game;}
            set {_game=value;}
        }
        public virtual string Image
        {
            get {return _image;}
            set {_image=value;}
        }
        #endregion
    }
    #endregion
}
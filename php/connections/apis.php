<?php
require_once( getabspath('connections/rest.php') );

class RestManager
{

/*
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();

##foreach @BUILDER.arrRestConnections as @conn##
		$data = array();
		$data["connId"] = "##@conn.strID s##";
		$data["connName"] = "##@conn.strName s##";

		$this->_connectionsIdByName["##@conn.strName s##"] = "##@conn.strID s##";

		$data["url"] = "##@conn.strUrl s##";
		$data["authType"] = "##@conn.strAuthType s##";
	##if @conn.strAuthType=="basic"##
		$data["username"] = "##@conn.strUserName s##";
		$data["password"] = "##@conn.strPassword s##";
	##endif##
	##if @conn.strAuthType=="api"##
		$data["apiKey"] = "##@conn.strAPIKey s##";
		$data["keyLocation"] = ##@conn.nKeyLocation##;
		$data["keyParameter"] = "##@conn.strKeyParameter s##";
	##endif##
	##if @conn.strAuthType=="oauth"##
		$data["authUrl"] = "##@conn.strAuthUrl s##";
		$data["tokenUrl"] = "##@conn.strTokenUrl s##";
		$data["clientId"] = "##@conn.strClientId s##";
		$data["clientSecret"] = "##@conn.strClientSecret s##";
		##if exists( @conn.strScope )##
		$data["scope"] = "##@conn.strScope s##";
		##endif##
	##endif##
	##if @conn.strAuthType=="oauthserver"##
		$data["tokenUrl"] = "##@conn.strTokenUrl s##";
		$data["clientId"] = "##@conn.strClientId s##";
		$data["clientSecret"] = "##@conn.strClientSecret s##";
		$data["username"] = "##@conn.strUserName s##";
		$data["password"] = "##@conn.strPassword s##";
		##if @conn.bClientCredentials##
		$data["clientCredentials"] = true;
		##endif##
		##if exists( @conn.strScope )##
		$data["scope"] = "##@conn.strScope s##";
		##endif##
	##endif##

		$connectionsData["##@conn.strID s##"] = $data;
##endfor##
		$this->_connectionsData = &$connectionsData;
	}

*/	

	public function getConnection( $id ) {
		if( $id == spidGOOGLEDRIVE ) {
			return getGoogleDriveConnection();
		}
		if( $id == spidONEDRIVE ) {
			return getOneDriveConnection();
		}
		if( $id == spidDROPBOX ) {
			return getDropboxConnection();
		}
		$connInfo = runnerGetRestConnectionInfo( $id );
		if( !$connInfo ) {
			return null;
		}
		return new RestConnection( $connInfo );
	}

	public function idByName( $name ) {
		return runnerRestConnectionIdByName( $name );
	}
}


?>
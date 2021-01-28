config = {
  "interfaces": {
    "google.streetview.publish.v1.StreetViewPublishService": {
      "retry_codes": {
        "idempotent": [
          "DEADLINE_EXCEEDED",
          "UNAVAILABLE"
        ],
        "non_idempotent": []
      },
      "retry_params": {
        "default": {
          "initial_retry_delay_millis": 100,
          "retry_delay_multiplier": 1.3,
          "max_retry_delay_millis": 60000,
          "initial_rpc_timeout_millis": 20000,
          "rpc_timeout_multiplier": 1.0,
          "max_rpc_timeout_millis": 20000,
          "total_timeout_millis": 600000
        }
      },
      "methods": {
        "StartUpload": {
          "timeout_millis": 60000,
          "retry_codes_name": "non_idempotent",
          "retry_params_name": "default"
        },
        "CreatePhoto": {
          "timeout_millis": 60000,
          "retry_codes_name": "non_idempotent",
          "retry_params_name": "default"
        },
        "GetPhoto": {
          "timeout_millis": 60000,
          "retry_codes_name": "idempotent",
          "retry_params_name": "default"
        },
        "BatchGetPhotos": {
          "timeout_millis": 60000,
          "retry_codes_name": "idempotent",
          "retry_params_name": "default"
        },
        "ListPhotos": {
          "timeout_millis": 60000,
          "retry_codes_name": "idempotent",
          "retry_params_name": "default"
        },
        "UpdatePhoto": {
          "timeout_millis": 60000,
          "retry_codes_name": "idempotent",
          "retry_params_name": "default"
        },
        "BatchUpdatePhotos": {
          "timeout_millis": 60000,
          "retry_codes_name": "non_idempotent",
          "retry_params_name": "default"
        },
        "DeletePhoto": {
          "timeout_millis": 60000,
          "retry_codes_name": "idempotent",
          "retry_params_name": "default"
        },
        "BatchDeletePhotos": {
          "timeout_millis": 60000,
          "retry_codes_name": "non_idempotent",
          "retry_params_name": "default"
        }
      }
    }
  }
}
